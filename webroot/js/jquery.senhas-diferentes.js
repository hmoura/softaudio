function ver_senha(id)
        {
            var senha = document.getElementById(id);
            var senhaC = document.getElementById(id+'C');
            var nome = document.getElementById(id);

            if (nome.value  = "")
            {
                alert("Favor preenche o campo nome");
                botao.disabled = true;
                nome.style.backgroundColor = "#FD5353";
            } else {
            if (senha.value != senhaC.value)
            {
                senha.style.backgroundColor = "#FD5353";
                senhaC.style.backgroundColor = "#FD5353";

                botao.disabled = true;
                alert("Senha diferentes")
                return false;

            } else {
                botao.disabled = false;
            }
            senha.style.backgroundColor = "#88F79B";
            senhaC.style.backgroundColor = "#88F79B";

            return true;
        }
            return false;
        }   