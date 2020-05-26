  <div id="my-login-modal" class="login-modal">
        <div class="login-modal-content">
        <form method="POST" name="login">

          <div class="modal-header">
            <span class="login-close-modal spanning">&times;</span>
            <img class="burger-img spanning" src="images/Burguer.png" alt="">
            <h1 class="spanning">Iniciar Sesion
          </div>
          <div class="modal-body">
              <hr>
            <div class="login-container">
                <label for="email"><p>Usuario (Email)</p></label>
                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" title="Enter Valid Email - All lowercase & Alphanumeric - something@something.domain" placeholder="Enter Email" maxlength="50" oninput="loginEmailcheck()" required>
                <div class="error-text" id="err_login_email"></div>
                <label for="password"><p>Contraseña</p></label>
                <input type="password" name="password" pattern=".{8,10}" placeholder="Enter Password" title="Must contain at least 8 to at most 10 charecters (including special charecters)" maxlength="10" oninput="loginPasswordcheck()" required>
                <div class="error-text" id="err_login_password"></div>  
            </div>
              <hr>
          </div>
          <div class="modal-footer">
            <button type="submit" name="login" class="login-button">Entrar</button>
        </div>
        </form>

        </div>
      </div>