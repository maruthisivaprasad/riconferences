<div class="sidenav tab">
    <a href="events.php" <?php if (strpos($_SERVER['REQUEST_URI'], "events.php") > -1 || strpos($_SERVER['REQUEST_URI'], "editevent.php") > -1 || strpos($_SERVER['REQUEST_URI'], "createevent.php") > -1 || strpos($_SERVER['REQUEST_URI'], "viewevent.php") > -1) {
    echo "class = 'active'";
} ?> >Events</a>
    <a href="contacts.php" <?php if (strpos($_SERVER['REQUEST_URI'], "contacts.php") > -1) {
    echo "class = 'active'";
} ?>>Contacts</a>
    <a href="conferance.php" <?php if (strpos($_SERVER['REQUEST_URI'], "conferance.php") > -1) {
    echo "class = 'active'";
} ?>>Conferance</a>
</div>

