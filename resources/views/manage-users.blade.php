@extends('layouts.dashboard-master')

@section('title','Dashboard')

@section('content')
<div class="pane-white">
    <h1 class="page-header">Manage Users</h1>
    <i name="add-circle"></i>
    <div class="content">
        <a href="javascript:;" data-toggle="modal" data-target="#createUser" class="btn btn-secondary"><i class="plus icon"></i>Create User</a>

        <div class="table-responsive" v-if="showTable">
            <table class="table" id="dt">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Joshua</td>
                        <td>Edigbe</td>
                        <td>joshuaedigbe@gmail.com</td>
                        <td>08098373773</td>
                        <td class="text-center actions-btn_container">
                            <a href="" class="btn btn-sm btn-info">
                                <i class="list icon"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-warning">
                                <i class="edit icon"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="trash outline icon"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>34</td>
                        <td>David</td>
                        <td>Edigbe</td>
                        <td>davidedigbe@gmail.com</td>
                        <td>08098373773</td>
                        <td class="text-center actions-btn_container">
                            <a href="" class="btn btn-sm btn-info">
                                <i class="list icon"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-warning">
                                <i class="edit icon"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="trash outline icon"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Reuben</td>
                        <td>Edigbe</td>
                        <td>reubenedigbe@gmail.com</td>
                        <td>08098373773</td>
                        <td class="text-center actions-btn_container">
                            <a href="" class="btn btn-sm btn-info">
                                <i class="list icon"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-warning">
                                <i class="edit icon"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="trash outline icon"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--<div class="no-table-data text-center"  v-else>
            <h3> <i class="home icon"></i>You've not created any user</h3>
            <p>You're not seeing anything because you have not created any user. <br> You can users by clicking
                the add button below</p>
            <a href="" id="add-hostel-btn" class="btn btn-warning"><i class="plus icon"></i> Add User</a>

        </div>-->          


    </div>
    </div>
@endsection

<!-- Create User Modal -->
<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="createUser">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create User</h4>
      </div>
      <div class="modal-body">
        <form method="post">
            <div class="row">
                <div class="col-md-6">
                    <input type="hidden" name="_token" value="vNPwK7WHmD7n8DXsKMp9uqW8453V00Zi0689b67I">
            <div class="form-group">
                <input type="telephone" name="phone" class="form-control" placeholder="Active Mobile Number" required value="">
            </div>
            
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email address" required value="">
            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name" required value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <select class="form-control" name="day" required>
                            <option value="">Day</option>
                            <option value="01" >01</option>
                            <option value="02" >02</option>
                            <option value="03" >03</option>
                            <option value="04" >04</option>
                            <option value="05" >05</option>
                            <option value="06" >06</option>
                            <option value="07" >07</option>
                            <option value="08" >08</option>
                            <option value="09" >09</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                            <option value="13" >13</option>
                            <option value="14" >14</option>
                            <option value="15" >15</option>
                            <option value="16" >16</option>
                            <option value="17" >17</option>
                            <option value="18" >18</option>
                            <option value="19" >19</option>
                            <option value="20" >20</option>
                            <option value="21" >21</option>
                            <option value="22" >22</option>
                            <option value="23" >23</option>
                            <option value="24" >24</option>
                            <option value="25" >25</option>
                            <option value="26" >26</option>
                            <option value="27" >27</option>
                            <option value="28" >28</option>
                            <option value="29" >29</option>
                            <option value="30" >30</option>
                            <option value="31" >31</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select class="form-control" name="month" required>
                            <option value="">Month</option>
                            <option value="01" >January</option>
                            <option value="02" >February</option>
                            <option value="03" >March</option>
                            <option value="04" >April</option>
                            <option value="05" >May</option>
                            <option value="06" >June</option>
                            <option value="07" >July</option>
                            <option value="08" >August</option>
                            <option value="09" >September</option>
                            <option value="10" >October</option>
                            <option value="11" >November</option>
                            <option value="12" >December</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select class="form-control" name="year" required>
                            <option>Year</option>
                            <option value="1960" >1960</option>
                            <option value="1961" >1961</option>
                            <option value="1962" >1962</option>
                            <option value="1963" >1963</option>
                            <option value="1964" >1964</option>
                            <option value="1965" >1965</option>
                            <option value="1966" >1966</option>
                            <option value="1967" >1967</option>
                            <option value="1968" >1968</option>
                            <option value="1969" >1969</option>
                            <option value="1970" >1970</option>
                            <option value="1971" >1971</option>
                            <option value="1972" >1972</option>
                            <option value="1973" >1973</option>
                            <option value="1974" >1974</option>
                            <option value="1975" >1975</option>
                            <option value="1976" >1976</option>
                            <option value="1977" >1977</option>
                            <option value="1978" >1978</option>
                            <option value="1979" >1979</option>
                            <option value="1980" >1980</option>
                            <option value="1981" >1981</option>
                            <option value="1982" >1982</option>
                            <option value="1983" >1983</option>
                            <option value="1984" >1984</option>
                            <option value="1985" >1985</option>
                            <option value="1986" >1986</option>
                            <option value="1987" >1987</option>
                            <option value="1988" >1988</option>
                            <option value="1989" >1989</option>
                            <option value="1990" >1990</option>
                            <option value="1991" >1991</option>
                            <option value="1992" >1992</option>
                            <option value="1993" >1993</option>
                            <option value="1994" >1994</option>
                            <option value="1995" >1995</option>
                            <option value="1996" >1996</option>
                            <option value="1997" >1997</option>
                            <option value="1998" >1998</option>
                            <option value="1999" >1999</option>
                            <option value="2000" >2000</option>
                            <option value="2001" >2001</option>
                            <option value="2002" >2002</option>
                            <option value="2003" >2003</option>
                            <option value="2004" >2004</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="remove icon"></i> Close</button>
        <button type="button" class="btn btn-secondary"><i class="handshake icon"></i> Register</button>
      </div>
    </div>
  </div>
</div>
