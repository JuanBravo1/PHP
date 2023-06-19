document.querySelector('form').addEventListener('submit', function(event) {
    var pass1 = document.getElementById('pass').value;
    var pass2 = document.getElementById('pass2').value;
    
    if (pass1 !== pass2) {
      alert('Las contraseñas no coinciden');
      event.preventDefault(); 
    }
  });
  