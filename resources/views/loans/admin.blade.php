<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

      <title>Loans</title>
  </head>

<body id="body-pd">
    
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <div class="header__img">
            <img src="img/logo.svg" alt="" />
        </div>
        <div class="col-2 add_btn">
            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addLoan">Add
                Loan</button>
        </div>
    </header>
    <div class="modal fade" id="addLoan" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add new loan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="{{ url('loans') }}" onsubmit="">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Name of the category" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <div class="input-group mb-3">
                                <textarea class="form-control" rows="5" placeholder="Description of the category"
                                    name="description" required=""></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save data</button>
                            <input type="hidden" name="id">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-bold nav__logo-icon'></i>
                    <span class="nav__logo-name">BB Infinity</span>
                </a>

                <div class="nav__list">
                    <a href="{{ route('dashboard') }}" class="nav__link">
                        <i class='bx bx-home nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="{{ route('users') }}" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Users</span>
                    </a>

                    <a href="{{ route('categories') }}" class="nav__link active">
                        <i class='bx bx-book-open nav__icon'></i>
                        <span class="nav__name">Categories</span>
                    </a>

                    <a href="{{ route('movies') }}" class="nav__link">
                        <i class='bx bx-film nav__icon'></i>
                        <span class="nav__name">Movies</span>
                    </a>

                    <a href="{{ route('loans') }}" class="nav__link">
                        <i class='bx bx-folder-plus nav__icon'></i>
                        <span class="nav__name">Loans</span>
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a onclick="event.preventDefault(); this.closest('form').submit();" class="nav__link">
                    <i class='bx bx-log-out nav__icon'></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </form>
        </nav>
    </div>

    <div class="container dash-content">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Loan date</th>
                    <th scope="col">Return date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Movie</th>
                    <th scope="col">User name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($loans) && count($loans)>0)
                @foreach($loans as $loan)
                <tr>
                    <th scope="row">{{ $loan->id }}</th>
                    <td>{{ $loan->loan_date }}</td>
                    <td>
                        @if ($loan->status == 'Borrowed')
                            Pending...
                        @else
                            {{ $loan->loan_date }}
                        @endif
                    </td>
                    <td>{{ $loan->status }}</td>
                    <td>{{ $loan->movie->title }}</td>
                    <td>{{ $loan->user->name }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a onclick="edit('{{ $loan->id }}','{{ $loan->status }}')"
                                    data-toggle="modal" data-target="#editLoan" class="dropdown-item">Edit</a>
                                <a onclick="remove({{ $loan->id }},this)" class="dropdown-item">
                                    Delete
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="editLoan" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Loan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="{{ url('loans') }}" onsubmit="">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="status">Status</label>
                            </div>
                            <select class="custom-select" id="status">
                                <option selected>Choose...</option>
                                <option value="Returned">Returned</option>
                                <option value="Borrowed">Borrowed</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update data</button>
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="return_date" id="return_date">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        function edit(id, status) {
            $("#status").val(status)
            $("#id").val(id)
            var f = new Date()
            $("#return_date").val(f.getFullYear() + "/" + (f.getMonth()+1) + "/" + f.getDate())
        }

        function remove(id, target) {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this loan!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        axios({
                            method: 'delete',
                            url: '{{ url('loans') }}',
                            data: {
                                id: id,
                                _token: '{{ csrf_token() }}'
                            }
                        }).then(function (response) {
                            if (response.data.code == 200) {
                                swal("Your catefory has been deleted!", {
                                    icon: "success",
                                });
                                $(target).parent().parent().parent().parent().remove();
                            } else {
                                swal("Error ocurred", {
                                    icon: "error",
                                });
                            }
                        });

                    } else {
                        swal("Your loan is safe!");
                    }
                });
            console.log(id)
        }

    </script>

</body>

</html>
