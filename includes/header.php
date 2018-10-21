<!-- if ($loggedin) -->
<div id='header' class="wrapper">
    <div id='container-logo' class="padding-sides">
        <span id="logo">Sommerhuset</span>
        <a href='../controller/admin.php'><?php var_dump($users); ?></a>
    </div>
    <nav id='navigation-container'>
        <a href='./'>Forside</a>
        <a href='../controller/om-huset.php'>Om huset</a>
        <a href='logout.php'>Log out</a>
    </nav>
</div>