<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Show contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2 class="text-center">Show Contact</h2>
            <div class="row" style="width: 300px">
                <div class="col-md-6">ID</div>
                <div class="col-md-6">{{ $showdata->id }}</div>
                <div class="col-md-6">Name</div>
                <div class="col-md-6">{{ $showdata->name }}</div>
                <div class="col-md-6">Email</div>
                <div class="col-md-6">{{ $showdata->email }}</div>
                <div class="col-md-6">Phone</div>
                <div class="col-md-6">{{ $showdata->phone }}</div>
                <div class="col-md-6">Address</div>
                <div class="col-md-6">{{ $showdata->address }}</div>
                <div class="col-md-6">Created</div>
                <div class="col-md-6">{{ $showdata->created_at->format('d M, Y') }}</div>
                <div class="col-md-6">Updated</div>
                <div class="col-md-6">{{ $showdata->updated_at->format('d M, Y') }}</div>
            </div>
        </div>
    </body>
</html>

