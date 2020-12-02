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

      <title>Movies</title>
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
            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addMovie">Add
                Movie</button>
        </div>
    </header>
    <div class="modal fade" id="addMovie" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add new movie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="{{ url('movies') }}" onsubmit="">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Title of the movie" name="title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <div class="input-group mb-3">
                                <textarea class="form-control" rows="5" placeholder="Description of the movie"
                                    name="description" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Classification</label>
                                <div class="input-group mb-3">
                                    <select name="classification" class="form-control">
                                        <option value="AA">AA</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="B15">B15</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Minutes</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="90" name="minutes">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Year</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="2020" name="year">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cover Image</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="cover">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Trailer</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Trailer url" name="trailer">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <div class="input-group mb-3">
                                    <select name="category_id" class="form-control">
                                    @if (isset($categories) && count($categories)>0)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                    @endif
                                    </select>
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save data</button>
                        <input type="hidden" name="id">
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

                    <a href="{{ route('categories') }}" class="nav__link">
                        <i class='bx bx-book-open nav__icon'></i>
                        <span class="nav__name">Categories</span>
                    </a>

                    <a href="{{ route('movies') }}" class="nav__link active">
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
        <h2>Movies</h2>
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                            <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Classification</th>
                            <th scope="col">Minutes</th>
                            <th scope="col">Year</th>
                            <th scope="col">Category</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($movies) && count($movies)>0)
                            @foreach($movies as $movie)
                            <tr>
                            <th scope="row">{{ $movie->title }}</th>
                            <td>{{ $movie->classification }}</td>
                            <td>{{ $movie->minutes }}</td>
                            <td>{{ $movie->year }}</td>
                            <td>{{ $movie->category->name }}</td>
                            <td><div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form action="{{ route('movieInfo') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $movie->id }}">
                                        <button type="submit" class="dropdown-item">View</button>
                                    </form>
                                    <a onclick="edit('{{ $movie->id }}', '{{ $movie->title }}', '{{ $movie->description }}','{{ $movie->classification }}','{{ $movie->minutes }}', '{{ $movie->year }}', '{{ $movie->trailer }}', '{{ $movie->category_id }}')"
                                    data-toggle="modal" data-target="#editMovie" class="dropdown-item"
                                    href="#">Edit</a>
                                <a onclick="remove('{{ $movie->id }}',this)" class="dropdown-item">Delete</a>
                                </div>
                                </div>
                            </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="editMovie" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">
	        	Edit movie
	        </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <form id="form_edit_movie" method="post" action="{{ url('movies') }}" enctype="multipart/form-data" >
	      	@csrf
	      	@method('PUT') 

	      	<div class="modal-body">
		        
	      		<div class="form-group">
				    <label for="title">Title</label>
				    <div class="input-group mb-3">
					  <input type="text" class="form-control" placeholder="Title example" name="title" id="title" required="">
					</div>
				</div>

				<div class="form-group">
				    <label for="description">Description</label>
				    <div class="input-group mb-3">
					  <textarea class="form-control" rows="5" placeholder="Description of de movie" id="description" name="description"></textarea>
					</div>
				</div>

				<div class="form-group">
				    <label for="classification">Classification</label>
				    <div class="input-group mb-3">
					  <select class="form-control" id="classification" name="classification">
                        <option value="AA">AA</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="B15">B15</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
					  </select>
					</div>
				</div>

				<div class="form-group">
				    <label for="minutes">Minutes</label>
				    <div class="input-group mb-3">
					  <input type="number" id="minutes" class="form-control" placeholder="132" name="minutes" required="">
					</div>
				</div>

				<div class="form-group">
				    <label for="year">Year</label>
				    <div class="input-group mb-3">
					  <input type="number" id="year" class="form-control" placeholder="2000" name="year" required="">
					</div>
				</div>

				<div class="form-group">
				    <label for="cover">Cover</label>
				    <div class="input-group mb-3">
					  <input type="file" class="form-control" name="cover_file" >
					</div>
				</div>

				<div class="form-group">
				    <label for="trailer">Trailer</label>
				    <div class="input-group mb-3">
					  <input id="trailer" type="text" class="form-control" placeholder="www.youtube.com" name="trailer" required="">
					</div>
				</div>

				<div class="form-group">
				    <label for="category">Category</label>
				    <div class="input-group mb-3">
					  <select id="category_id" class="form-control" name="category_id">
					  	@if (isset($categories) && count($categories)>0)
					  	@foreach ($categories as $category)
					  		<option value="{{ $category->id}}">
					  			{{ $category->name }}
					  		</option>
					  	@endforeach
					  	@endif 
					  </select>
					</div>
				</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save data</button>
                <input type="hidden" name="id" id="id">
		      </div>

	      </form>

	    </div>
	  </div>
    </div> 

    
    <script src="js/main.js"></script>
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
        function edit(id, title, description, classification, minutes, year, trailer, category_id) {
            $("#title").val(title)
            $("#description").val(description)
            $("#classification").val(classification)
            $("#minutes").val(minutes)
            $("#year").val(year)
            $("#trailer").val(trailer)
            $("#category_id").val(category_id)
            $("#id").val(id)
        }

        function remove(id, target) {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this movie!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        axios({
                            method: 'delete',
                            url: '{{ url('movies') }}',
                            data: {
                                id: id,
                                _token: '{{ csrf_token() }}'
                            }
                        }).then(function (response) {
                            if (response.data.code == 200) {
                                swal("Your movie has been deleted!", {
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
                        swal("Your movie is safe!");
                    }
                });
        }

    </script>

</body>

</html>