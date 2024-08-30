<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Forms</h5>
        <div class="card">
            <div class="card-body">
            <form action="?a=create" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">user name</label>
                            <input type="name" name="username" class="form-control" id="username" aria-describedby="emailHelp"> 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Perfil</label>
                            <select id="disabledSelect" class="form-select" name="position">
                                <option value="Admin">Admin</option>
                                <option value="Cashier">Cashier</option>
                                <option value="Custumer">Custumer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="card-title fw-semibold mb-4">Foto</h5>
                        <div class="card">
                            <img src="views/styles/src/assets/images/products/s4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">upload file</h5>  
                                <input type="file" name="upfile" class="form-control" id="upfile_id">                  
                                <!-- a href="#" class="btn btn-primary">carregar imagens</a-->
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>