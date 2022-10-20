 function validerForm(e)
            {
                var e = e || window.event;
                var k = e.keyCode || e.which;
                if (k == 13 && !e.shiftKey)
                {
                    alert("Formulaire bien envoyer !")
                    document.getElementById("send").click();
                }
            }