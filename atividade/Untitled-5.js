function verificarSenhas() {
    var senha = document.getElementById("password").value;
    var confirmSenha = document.getElementById("confirm-password").value;
    
    if (senha !== confirmSenha) {
      alert("As senhas não são iguais!");
      return;
    }
    
    var nome = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var idade = document.getElementById("age").value;
    var telefone = document.getElementById("phone").value;
    var genero = document.getElementById("gender").value;
    
    var dados = "Nome: " + nome + "\n" +
                "Email: " + email + "\n" +
                "Idade: " + idade + "\n" +
                "Telefone: " + telefone + "\n" +
                "Gênero: " + genero;
    
    document.getElementById("data").value = dados;
  }
  