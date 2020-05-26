<div id="my-register-modal" class="register-modal">
    <div class="register-modal-content">
    <form method="POST" name="register">

      <div class="modal-header">
        <span class="register-close-modal spanning">&times;</span>
        <img class="burger-img spanning" src="images/Burguer.png" alt="">
        <h1 class="spanning">Registro de Usuario
      </div>
      <div class="modal-body">
          <hr>
        <div class="register-container">
            
            <label for="full_name"><p>Nombre y apellido:</p></label>
            <input type="text" name="full_name" pattern="[A-Za-z ]{1,50}" title="Enter Valid Name - Alphabets only with a maximum length of 50 charecters" placeholder="Enter Fullname" maxlength="50" oninput="fullnamecheck()" required>
            <div class="error-text" id="err_full_name"></div>
            <label for="email"><p>Correo:</p></label>
            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" title="Enter Valid Email - All lowercase & Alphanumeric - something@something.domain" placeholder="Enter Email" maxlength="50" oninput="emailcheck()" required>
            <div class="error-text" id="err_email"></div>
            <label for="password"><p>Contraseña:</p></label>
            <input type="password" name="password" pattern=".{8,10}" placeholder="Enter Password" title="Must contain at least 8 to at most 10 charecters (including special charecters)" maxlength="10" oninput="passwordcheck()" required>
            <div class="error-text" id="err_password"></div>
            <label for="re_password"><p>Repetir Contraseña:</p></label>
            <input type="password" name="re_password" pattern=".{8,10}" title="Must contain at least 8 to at most 10 charecters (including special charecters)" placeholder="Re Enter Password" maxlength="10" oninput="repasswordcheck()" required>
            <div class="error-text" id="err_re_password"></div>
            <label for="address"><p>Direccion:</p></label>
            <textarea name="address" title="Enter Valid Address containing at most 250 charecters" placeholder="Enter Address" maxlength="250" oninput="addresscheck()" required></textarea>
            <div class="error-text" id="err_address"></div>
          </div>
          <hr>
      </div>
      <div class="modal-footer">
      <button type="submit" name="register" class="register-button">Cargar</button>
    </div>
    </form>

    </div>
  </div>