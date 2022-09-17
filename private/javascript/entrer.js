 function validerForm(e)
            {
                var e = e || window.event;
                var k = e.keyCode || e.which;
                if (k == 13 && !e.shiftKey)
                {
                    alert('Tu a appuyé sur Entrée');
                    document.getElementById("send").click();
                }
            }