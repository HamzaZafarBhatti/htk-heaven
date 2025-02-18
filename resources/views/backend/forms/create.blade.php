<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Form - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/vendors/insur-icons/style.css') }}">
    <style>
        /* Custom styles for sidebar and content */
        .sidebar {
            height: 100vh;
            width: 350px;
            position: fixed;
            top: 56px;
            left: 0;
            background-color: #f8f9fa;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .content {
            margin-left: 350px;
            padding: 20px;
            margin-top: 56px;
        }

        .field {
            background: #007bff;
            border-color: #007bff;
            color: #fff;
            border-radius: .3rem;
            padding: 5px 5px 5px 8px;
        }

        .field+.field {
            margin-top: 10px;
        }

        .form-section {
            border: 1px solid #ccc;
            margin-bottom: 1rem;
            padding: 1rem;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('filament.admin.pages.dashboard') }}">{{ config('app.name') }}</a>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="field draggable" data-type="textfield">
            <i class="fa-solid fa-terminal"></i> Text Field
        </div>
        <div class="field draggable" data-type="textarea">
            <i class="fa-solid fa-font"></i> Text Area
        </div>
        <div class="field draggable" data-type="number">
            <i class="fa-solid fa-hashtag"></i> Number
        </div>
        <div class="field draggable" data-type="password">
            <i class="fa-solid fa-star-of-life"></i> Password
        </div>
        <div class="field draggable" data-type="select">
            <i class="fa-solid fa-list"></i> Select
        </div>
        <div class="field draggable" data-type="checkbox">
            <i class="fa-solid fa-square-check"></i> Checkbox
        </div>
        <div class="field draggable" data-type="selectboxes">
            <i class="fa-solid fa-square-plus"></i> Select Boxes
        </div>
        <div class="field draggable" data-type="radio">
            <i class="fa-solid fa-square-plus"></i> Radio
        </div>
    </aside>

    <!-- Content -->
    <main class="content">
        <div>
            <div class="form-section">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="section-titles[]" class="form-control" placeholder="Enter title"
                        required>
                </div>
                <div class="drop-area">
                    Drag and Drop a form component
                </div>
            </div>
            <button class="btn btn-primary">
                <i class="fa-solid fa-square-plus"></i> Add Section
            </button>
        </div>
        <div class="float-end">
            <button class="btn btn-success">
                <i class="fa-solid fa-check"></i> Save
            </button>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/60ed0a7de4.js" crossorigin="anonymous"></script>
    <script>
        const draggables = document.querySelectorAll('.draggable');
        const dropAreas = document.querySelectorAll('.drop-area');

        draggables.forEach(function(draggable) {
            draggable.addEventListener('dragstart', function(ev) {
                ev.dataTransfer.setData("text", ev.target.dataset.type);
            });
        })

        dropAreas.forEach(function(dropArea) {
            dropArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                dropArea.style.backgroundColor = '#e0e0e0';
            });

            dropArea.addEventListener('dragleave', function() {
                dropArea.style.backgroundColor = '';
            });

            dropArea.addEventListener('drop', function(ev) {
                ev.preventDefault();
                dropArea.style.backgroundColor = '';
                const type = ev.dataTransfer.getData('text');
                addFormComponent(type, dropArea);
            });
        })



        function addFormComponent(type, dropArea) {
            let newComponent;
            switch (type) {
                case 'textfield':
                    newComponent = document.createElement('input');
                    newComponent.type = 'text';
                    newComponent.placeholder = 'Enter text';
                    break;
                case 'textarea':
                    newComponent = document.createElement('textarea');
                    newComponent.cols = '30';
                    newComponent.rows = '10';
                    newComponent.placeholder = 'Enter text';
                    break;
                case 'number':
                    newComponent = document.createElement('input');
                    newComponent.type = 'number';
                    newComponent.placeholder = 'Enter number';
                    break;
                case 'password':
                    newComponent = document.createElement('input');
                    newComponent.type = 'password';
                    newComponent.placeholder = 'Enter password';
                    break;
                case 'select':
                    newComponent = document.createElement('select');
                    const option1 = document.createElement('option');
                    option1.value = '1';
                    option1.text = 'Option 1';
                    const option2 = document.createElement('option');
                    option2.value = '2';
                    option2.text = 'Option 2';
                    newComponent.appendChild(option1);
                    newComponent.appendChild(option2);
                    break;
            }
            dropArea.appendChild(newComponent);
        }
    </script>
</body>

</html>
