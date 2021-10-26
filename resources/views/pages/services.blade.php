
@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-5">
<h1>菜品一覽</h1>
</div>  
<div class="col-6">
    <div class="text-right">
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalCenter">
        &nbsp;&nbsp;新增&nbsp;&nbsp;
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title mx-auto"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;新增菜品</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="mb-3">
                  
                      <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">菜品名稱</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                      </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-lg">
                          <span class="input-group-text" id="inputGroup-sizing-lg">克(一份)</span>
                          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                          &nbsp; &nbsp; &nbsp; &nbsp;
                          <span class="input-group-text" id="inputGroup-sizing-lg">價格</span>
                          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                    </div>
                    
                    <input id="file-09" class="file-loading" type="file">
                    <br>
                    <input class="btn btn-primary pull-bottom w-100" type="submit">
                  </form>
              </div>
              {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div> --}}
            </div>
          </div>
        </div>
    </div>     
</div>
<br>
<table class="table table-hover">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">菜名</th>
          <th scope="col">克（一份）</th>
          <th scope="col">價錢</th>
          <th scope="col">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>炸雞腿</td>
          <td>180</td>
          <td>45</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>炒青椒</td>
          <td>30</td>
          <td>10</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>炒高麗菜</td>
          <td>20</td>
          <td >10</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>三杯麵腸</td>
          <td>40</td>
          <td >15</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>三色豆</td>
          <td>45</td>
          <td >10</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>京醬肉絲</td>
          <td>50</td>
          <td >30</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>咖哩</td>
          <td>50</td>
          <td >15</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>四季豆</td>
          <td>35</td>
          <td >15</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>洋蔥炒蛋</td>
          <td>50</td>
          <td >20</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>清炒絲瓜</td>
          <td>60</td>
          <td >15</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">11</th>
          <td>炒油菜</td>
          <td>30</td>
          <td >10</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">12</th>
          <td>炒空心菜</td>
          <td>25</td>
          <td >15</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
        <tr>
          <th scope="row">13</th>
          <td>紅燒茄子</td>
          <td>55</td>
          <td >15</td>
          <td>      
              <button type="button" class="btn btn-outline-info pull-right ls3 ">
            🖊️
            </button>
               <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right"></td>
        </tr>
      </tbody>
  </table>

@endsection