<?php
session_start();
// Simple authentication - you might want to implement proper authentication
if(!isset($_SESSION['admin_logged_in'])) {
    if(isset($_POST['password'])) {
        // Simple password check - change 'admin123' to your desired password
        if($_POST['password'] === 'admin123') {
            $_SESSION['admin_logged_in'] = true;
        } else {
            $error = "Invalid password!";
        }
    }
    
    if(!isset($_SESSION['admin_logged_in'])) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Admin Login</title>
            <style>
                body { 
                    font-family: Arial, sans-serif; 
                    background: #f5f5f5; 
                    display: flex; 
                    justify-content: center; 
                    align-items: center; 
                    height: 100vh; 
                    margin: 0; 
                }
                .login-container { 
                    background: white; 
                    padding: 2rem; 
                    border-radius: 10px; 
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1); 
                    width: 300px; 
                }
                .login-container h2 { 
                    text-align: center; 
                    color: #0a4d3c; 
                    margin-bottom: 1.5rem; 
                }
                .form-group { 
                    margin-bottom: 1rem; 
                }
                .form-group input { 
                    width: 100%; 
                    padding: 0.8rem; 
                    border: 1px solid #ddd; 
                    border-radius: 5px; 
                    box-sizing: border-box; 
                }
                .form-group button { 
                    width: 100%; 
                    padding: 0.8rem; 
                    background: #0a4d3c; 
                    color: white; 
                    border: none; 
                    border-radius: 5px; 
                    cursor: pointer; 
                }
                .error { 
                    color: red; 
                    text-align: center; 
                    margin-bottom: 1rem; 
                }
            </style>
        </head>
        <body>
            <div class="login-container">
                <h2>Admin Login</h2>
                <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>
                <form method="POST">
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Enter admin password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
}

include 'config.php';

// Handle form submissions
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['action'])) {
        switch($_POST['action']) {
            case 'add_event':
                $name = mysqli_real_escape_string($conn, $_POST['event_name']);
                $date = mysqli_real_escape_string($conn, $_POST['event_date']);
                $short_desc = mysqli_real_escape_string($conn, $_POST['short_description']);
                $long_desc = mysqli_real_escape_string($conn, $_POST['long_description']);
                $image_path = mysqli_real_escape_string($conn, $_POST['image_path']);
                
                $sql = "INSERT INTO events (event_name, event_date, short_description, long_description, image_path) 
                        VALUES ('$name', '$date', '$short_desc', '$long_desc', '$image_path')";
                mysqli_query($conn, $sql);
                break;
                
            case 'delete_event':
                $id = mysqli_real_escape_string($conn, $_POST['event_id']);
                mysqli_query($conn, "DELETE FROM events WHERE event_id = '$id'");
                break;
                
            case 'add_member':
                // Similar implementation for other tables
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Green Voice</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .admin-container { max-width: 1200px; margin: 0 auto; padding: 2rem; }
        .admin-header { background: white; padding: 2rem; border-radius: 10px; margin-bottom: 2rem; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .admin-nav { display: flex; gap: 1rem; margin-top: 1rem; }
        .admin-nav button { padding: 0.8rem 1.5rem; border: none; background: #0a4d3c; color: white; border-radius: 5px; cursor: pointer; }
        .admin-nav button:hover { background: #1a936f; }
        .admin-content { background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
        .form-group input, .form-group textarea, .form-group select { width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px; }
        .form-group textarea { height: 100px; }
        .btn { padding: 0.8rem 1.5rem; background: #0a4d3c; color: white; border: none; border-radius: 5px; cursor: pointer; }
        .btn:hover { background: #1a936f; }
        .btn-danger { background: #dc3545; }
        .btn-danger:hover { background: #c82333; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 0.8rem; text-align: left; }
        th { background: #f8f9fa; }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Green Voice Admin Panel</h1>
            <div class="admin-nav">
                <button onclick="showTab('events')">Events</button>
                <button onclick="showTab('members')">Members</button>
                <button onclick="showTab('teachers')">Teachers</button>
                <button onclick="showTab('students')">Student Advisors</button>
            </div>
        </div>

        <!-- Events Tab -->
        <div id="events" class="tab-content active">
            <h2>Manage Events</h2>
            
            <!-- Add Event Form -->
            <form method="POST" style="margin-bottom: 2rem; padding: 1rem; border: 1px solid #ddd; border-radius: 5px;">
                <h3>Add New Event</h3>
                <input type="hidden" name="action" value="add_event">
                <div class="form-group">
                    <label>Event Name:</label>
                    <input type="text" name="event_name" required>
                </div>
                <div class="form-group">
                    <label>Event Date:</label>
                    <input type="date" name="event_date" required>
                </div>
                <div class="form-group">
                    <label>Short Description:</label>
                    <textarea name="short_description" required></textarea>
                </div>
                <div class="form-group">
                    <label>Long Description:</label>
                    <textarea name="long_description" required></textarea>
                </div>
                <div class="form-group">
                    <label>Image Path:</label>
                    <input type="text" name="image_path" required>
                </div>
                <button type="submit" class="btn">Add Event</button>
            </form>

            <!-- Events List -->
            <h3>Existing Events</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM events ORDER BY event_date DESC");
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$row['event_id']}</td>
                            <td>{$row['event_name']}</td>
                            <td>{$row['event_date']}</td>
                            <td>
                                <form method='POST' style='display:inline;'>
                                    <input type='hidden' name='action' value='delete_event'>
                                    <input type='hidden' name='event_id' value='{$row['event_id']}'>
                                    <button type='submit' class='btn btn-danger'>Delete</button>
                                </form>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Other tabs would follow similar structure -->
        <div id="members" class="tab-content">
            <h2>Manage Members</h2>
            <!-- Similar form and table structure for members -->
        </div>

        <div id="teachers" class="tab-content">
            <h2>Manage Teachers</h2>
            <!-- Similar form and table structure for teachers -->
        </div>

        <div id="students" class="tab-content">
            <h2>Manage Student Advisors</h2>
            <!-- Similar form and table structure for student advisors -->
        </div>
    </div>

    <script>
        function showTab(tabName) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Show selected tab
            document.getElementById(tabName).classList.add('active');
        }
    </script>
</body>
</html>