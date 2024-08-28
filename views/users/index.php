
        <div class="row"> 
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!--h5 class="card-title">USERs</h5-->
               <a href="?a=create" target=""
                class="btn btn-primary me-2"><span class="d-none d-md-block">Novo</span> <span class="d-block d-md-none">Pro</span></a>
                
              <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0">
                  <thead>
                    <tr class="border-2 border-bottom border-primary border-0"> 
                      <th scope="col" class="ps-0">UserName</th>
                      <th scope="col" >Nome</th>
                      <th scope="col" class="text-center">Perfil</th>
                      <th scope="col" class="text-center"> ... </th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider">
                    <?php
                    foreach ($resultusers as $key => $value) {
                   
                    ?>
                    
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block"><?= $value["username"] ?></span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block"><?= $value["name"] ?></a>
                      </td>
                      <td class="text-center fw-medium"><?= $value["position"] ?></td>
                      <td class="text-center fw-medium"><button type="button" class="btn btn-secondary m-1">view</button><button type="button" class="btn btn-warning m-1">edit</button><button type="button" class="btn btn-danger m-1">dalete</button></td>
                    </tr>

                    <?php   } ?>
                   </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
 
        </div>
