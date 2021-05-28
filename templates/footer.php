<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Set "active" class -->
<script>
    var path = location.pathname;
    document.querySelectorAll('[href]').forEach(element => {
        if (element.getAttribute('href') === path || '/' + element.getAttribute('href') === path) {
            element.classList.add('active');
        }
    });

    function validate(seats){
        report = document.getElementById("report").value;
        if(parseInt(report) > parseInt(seats) || parseInt(report) < 0){
            alert("Valore inserito non valido");
        }else {
            location.href="index.php?action=save-report-" + report;
        }
    }
</script>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted footer" style="position: absolute; bottom: 0; width: 100%; height: 150px;">

    <center>
        <br>
        <p><i class="bi bi-github"></i>
            <a href="https://github.com/Sbiliphone">Git Sbiliphone</a></p>
        <p>
            <i class="bi bi-mailbox"></i>
            alessandro.ligugnana@gmail.com
        </p>
        <p><i class="bi bi-phone"></i></i> +39 331 276 1217</p>
    </center>

</footer>
</div>
</body>
<!-- Footer -->