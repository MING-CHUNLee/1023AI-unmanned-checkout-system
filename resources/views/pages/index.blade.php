@extends('layouts.app')


@section('content')
<h1>今日提供菜品</h1>

<p>
  <div class="container">
  <div class="row">
      <div class="col-3">
        <div class="card" style="width: 18rem;">
           
          <div class="card-body">
            <h4 class="card-title" style=" text-align: center;font-size: 3vh;">炒豆芽</h4>
            <img src="../炒豆芽.jpg" class="card-img-top" alt="...">
           
            <p class="card-text" style=" text-align: center;font-size: 2vh;"><b> <br>已製作<span style="color: brown">60</span>人份</b></p>
          </div>
      
              <div class="card-body">
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Show a second modal and hide this one with the button below.
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary pull-right w-100" data-toggle="modal" data-target="#exampleModalCenter">
                    &nbsp;&nbsp;追加數量&nbsp;&nbsp;
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title mx-auto"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;追加數量</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                                <div class="mb-3">
                              
                                  <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">人份量</span>
                                  </div>
                                </div>
                                
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
          </div>
          <div class="col-1">
          </div>
          <div class="col-3">
            <div class="card" style="width: 18rem;">
               
                 
          <div class="card-body">
            <h4 class="card-title" style=" text-align: center;font-size: 3vh;">豆干</h4>
            <img src="../豆干.jpg" class="card-img-top" alt="...">
           
            <p class="card-text" style=" text-align: center;font-size: 2vh;"><b> <br>已製作<span style="color: brown">50</span>人份</b></p>
          </div>
          
                  <div class="card-body">
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Show a second modal and hide this one with the button below.
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary pull-right w-100" data-toggle="modal" data-target="#exampleModalCenter">
                        &nbsp;&nbsp;追加數量&nbsp;&nbsp;
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title mx-auto"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;追加數量</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                  
                                      <div class="input-group input-group-lg">
                                       
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                        <span class="input-group-text" id="inputGroup-sizing-lg">人份量</span>
                                      </div>
                                    </div>
                                    
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
              </div>
              <div class="col-1">
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                   
                  <div class="card-body">
                    <h4 class="card-title" style=" text-align: center;font-size: 3vh;">炸雞腿</h4>
                    <img src="../炸雞腿.jpg" class="card-img-top" alt="...">
                   
                    <p class="card-text" style=" text-align: center;font-size: 2vh;"><b> <br>已製作<span style="color: brown">30</span>人份</b></p>
                  </div>
              
                      <div class="card-body">
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Show a second modal and hide this one with the button below.
                                </div>
                                <div class="modal-footer">
                                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button type="button" class="btn btn-primary pull-right w-100" data-toggle="modal" data-target="#exampleModalCenter">
                            &nbsp;&nbsp;追加數量&nbsp;&nbsp;
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title mx-auto"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;追加數量</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                      
                                          <div class="input-group input-group-lg">
                                           
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">人份量</span>
                                          </div>
                                        </div>
                                        
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
                  </div>
      </div>
      {{-- 第二區 --}}
  <div class="row">
      <div class="col-3">
        <div class="card" style="width: 18rem;">
           
          <div class="card-body">
            <h4 class="card-title" style=" text-align: center;font-size: 3vh;">香腸</h4>
            <img src="../香腸.jpg" class="card-img-top" alt="...">
           
            <p class="card-text" style=" text-align: center;font-size: 2vh;"><b> <br>已製作<span style="color: brown">55</span>人份</b></p>
          </div>
      
              <div class="card-body">
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Show a second modal and hide this one with the button below.
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary pull-right w-100" data-toggle="modal" data-target="#exampleModalCenter">
                    &nbsp;&nbsp;追加數量&nbsp;&nbsp;
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title mx-auto"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;追加數量</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                                <div class="mb-3">
                              
                                  <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">人份量</span>
                                  </div>
                                </div>
                                
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
          </div>
          <div class="col-1">
          </div>
          <div class="col-3">
            <div class="card" style="width: 18rem;">
               
                 
          <div class="card-body">
            <h4 class="card-title" style=" text-align: center;font-size: 3vh;">紅燒茄子</h4>
            <img src="../紅燒茄子.jpg" class="card-img-top" alt="...">

            <p class="card-text" style=" text-align: center;font-size: 2vh;"><b> <br>已製作<span style="color: brown">20</span>人份</b></p>
          </div>
          
                  <div class="card-body">
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Show a second modal and hide this one with the button below.
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary pull-right w-100" data-toggle="modal" data-target="#exampleModalCenter">
                        &nbsp;&nbsp;追加數量&nbsp;&nbsp;
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title mx-auto"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;追加數量</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                  
                                      <div class="input-group input-group-lg">
                                       
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                        <span class="input-group-text" id="inputGroup-sizing-lg">人份量</span>
                                      </div>
                                    </div>
                                    
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
              </div>
              <div class="col-1">
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                   
                  <div class="card-body">
                    <h4 class="card-title" style=" text-align: center;font-size: 3vh;">紅蘿蔔炒蛋</h4>
                    <img src="../紅蘿蔔炒蛋.jpg" class="card-img-top" alt="...">
                   
                    <p class="card-text" style=" text-align: center;font-size: 2vh;"><b> <br>已製作<span style="color: brown">70</span>人份</b></p>
                  </div>
              
                      <div class="card-body">
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Show a second modal and hide this one with the button below.
                                </div>
                                <div class="modal-footer">
                                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button type="button" class="btn btn-primary pull-right w-100" data-toggle="modal" data-target="#exampleModalCenter">
                            &nbsp;&nbsp;追加數量&nbsp;&nbsp;
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title mx-auto"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;追加數量</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                      
                                          <div class="input-group input-group-lg">
                                           
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">人份量</span>
                                          </div>
                                        </div>
                                        
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
                  </div>
      </div>
  </div>

  </div>

   
</p>
@endsection


