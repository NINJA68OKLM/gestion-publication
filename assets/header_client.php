<header>
    <a href="index.php">Se déconnecter</a>
    <a href="consult.php">Consultation</a>
</header>

<script>
    let host = window.location.hostname;
    document.querySelectorAll("a").forEach(e => {
        e.href = "http://"+host+"/gestion-publication/"+e.getAttribute("href");
    });
</script>