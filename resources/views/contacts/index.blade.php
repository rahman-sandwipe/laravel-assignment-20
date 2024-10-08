<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacts</title>
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
        <div>
            <div class="container" style="margin-top: 50px">
                <div class="card mb-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <form action="{{ url('/contacts') }}" method="GET">@csrf
                                    <div class="col-md-10">
                                        <input type="text" name="get" class="form-control" placeholder="search">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn">search</button>    
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2 class="text-center">Contacts</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    {{-- <th>Created</th> --}}
                    <th>Action</th>
                </tr>
                @foreach ($contacts as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->address }}</td>
                    {{-- <td>{{ $row->created_at->format('d M,Y') }}</td> --}}
                    <td>
                        <div class="btn-group">
                            <a href="{{ URL::to('/contacts/show',$row->id) }}" class="btn btn-info">View</a>
                            <a href="{{ URL::to('/contacts/edit',$row->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ URL::to('/contacts/delete',$row->id) }}" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>

