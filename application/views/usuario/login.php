<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" action="<?=base_url('index.php/Usuario/login') ?>"
        method="post">
        <h1 class="text-center p-3">LOGIN</h1>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input name="nombreUsuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="contra" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-1">

            <label class="form-label">Tipo de Usuario:</label>

            <select class="form-select mb-3" name="rol" aria-label="Default select example">

                <option selected value="admin">Admin</option>

                <option value="user">User</option>

                </select>

            <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>
