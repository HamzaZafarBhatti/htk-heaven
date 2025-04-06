<?php

namespace App\Filament\Pages;

use App\Models\RoadTrafficAccident;
use App\Models\RoadTrafficAccidentComment;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ViewRoadTrafficAccidentComments extends Page implements HasTable
{
    use InteractsWithTable;

    public RoadTrafficAccident $record;
    public function mount(RoadTrafficAccident $record)
    {
        $this->record = $record;
    }

    protected static bool $shouldRegisterNavigation = false;

    protected static string $view = 'filament.pages.view-road-traffic-accident-comments';

    // public array $data = [];

    public function getTitle(): string
    {
        return "Comments for {$this->record->rta_number}";
    }

    // public function form(Form $form): Form
    // {
    //     return $form
    //         ->schema();
    // }

    protected function getTableQuery(): Builder
    {
        return RoadTrafficAccidentComment::query()->where('road_traffic_accident_id', $this->record->id)->with('commenter')->withoutGlobalScopes([
            SoftDeletingScope::class,
        ]);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('message')
                ->label('Comment')
                ->searchable()
                ->wrap(),
            Tables\Columns\ToggleColumn::make('is_hidden')
                ->label('Private'),
            Tables\Columns\TextColumn::make('commenter.name')
                ->label('Created By')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime('M d, Y H:i A')
                ->sortable(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make()
                ->modalHeading('Update Comment')
                ->modalSubmitActionLabel('Update')
                ->form([
                    Hidden::make('road_traffic_accident_id')
                        ->default($this->record->id),
                    TextInput::make('message')
                        ->label('Comment')
                        ->required()
                        ->maxLength(500),
                    Toggle::make('is_hidden')
                        ->label('Private Comment'),
                ])
                ->after(function ($record) {
                    Notification::make()
                        ->title('Comment updated successfully')
                        ->success()
                        ->send();
                })
                ->successNotificationTitle(null)
                ->visible(fn($record) => $record->created_by === auth()->id() || auth()->user()->hasRole('Superadmin')),
            Tables\Actions\DeleteAction::make(),
            Tables\Actions\ForceDeleteAction::make(),
            Tables\Actions\RestoreAction::make(),
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            Tables\Filters\TrashedFilter::make(),
        ];
    }
}
