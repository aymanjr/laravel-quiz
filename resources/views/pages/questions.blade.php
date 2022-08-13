@extends('layout.layout')

@section('questions')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Questions</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Question</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                    class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">

                    <thead>
                        <tr>

                            <th>#</th>
                            <th>Question</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $q)

                        <tr>

                            <td>{{$loop->index}}</td>
                            <td>{{$q->question}}</td>

                            <td>
                                <a href="#editEmployeeModal{{$q->id}}" class="edit" data-toggle="modal"><i
                                    class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>


                                    <a href="#deleteEmployeeModal{{$q->id}}" class="delete" data-toggle="modal"><i
                                        class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/add" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Question</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Question : </label>
                            <input type="text" class="form-control" name="question" required>
                        </div>

                        <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="A" name="opa">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="B" name="opb">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="C" name="opc">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="D" name="opd">
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="">Answer</label>
                            <select id="inputState" name="ans" class="form-control">
                              <option selected>A</option>
                              <option>B</option>
                              <option>C</option>
                              <option>D</option>
                            </select>
                          </div>


                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal{{$q->id}}" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="update" method="post">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Question</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Question : </label>
                            <input type="text" style="visibility: hidden" name="id" value="{{$q->id}}">
                            <input type="text" class="form-control" value="{{$q->question}}" name="question" required>
                        </div>

                        <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" value="{{$q->a}}" placeholder="A" name="opa">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control"  value="{{$q->b}}" placeholder="B" name="opb">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" value="{{$q->c}}" placeholder="C" name="opc">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" value="{{$q->d}}" placeholder="D" name="opd">
                            </div>
                          </div>
                          <div class="form-row">
                            <label for="">Answer</label>
                            <select id="inputState" name="ans" class="form-control">
                              <option value="{{$q->ans}}" selected>{{$q->ans}}</option>

                              <option>A</option>
                              <option>B</option>
                              <option>C</option>
                              <option>D</option>
                            </select>
                          </div>


                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal{{$q->id}}" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="delete">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Question</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
