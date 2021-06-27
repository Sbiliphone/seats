

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