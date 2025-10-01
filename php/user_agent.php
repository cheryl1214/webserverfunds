<!DOCTYPE html>
<html>
    <body>
        <h2>Your User Agent is:</h2>
        <div style="color: white;
            background: rgb(66, 139, 174); 
            border-radius: 10px;
            padding: 10px; 
            font-family: 'Courier New', Courier, monospace;
            font-size: 1em; ">
        <p><?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']); ?></p>
        </div>
    </body>
</html>