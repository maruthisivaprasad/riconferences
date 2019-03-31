<div class="sidenav tab">
    <a href="events.php" <?php if (strpos($_SERVER['REQUEST_URI'], "events.php") > -1 || strpos($_SERVER['REQUEST_URI'], "editevent.php") > -1 || strpos($_SERVER['REQUEST_URI'], "createevent.php") > -1 || strpos($_SERVER['REQUEST_URI'], "viewevent.php") > -1) {
    echo "class = 'active'";
    } ?> >Events</a>
    <a href="contacts.php" <?php if (strpos($_SERVER['REQUEST_URI'], "contacts.php") > -1) {
    echo "class = 'active'";
    } ?>>Contacts</a>
    <a href="conferance.php" <?php if (strpos($_SERVER['REQUEST_URI'], "conferance.php") > -1) {
    echo "class = 'active'";
    } ?>>Conference</a>
    <a href="order.php" <?php if (strpos($_SERVER['REQUEST_URI'], "order.php") > -1) {
    echo "class = 'active'";
    } ?>>Order History</a>
    <a href="organizecommitte.php" <?php if (strpos($_SERVER['REQUEST_URI'], "organizecommitte.php") > -1) {
    echo "class = 'active'";
    } ?>>Organizing Committe</a>
    <a href="keycommitte.php" <?php if (strpos($_SERVER['REQUEST_URI'], "key_committe.php") > -1) {
    echo "class = 'active'";
    } ?>>Key Committe</a>
    <a href="logout.php">Logout</a>
</div>

