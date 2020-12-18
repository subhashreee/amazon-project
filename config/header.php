<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .searchbar{
        font-family: Lato;
        margin: 10px;
    }

    .searchbar button{
        background-color: transparent;
        border: none;
        color: white;
    }
    .glyphicon-pencil{
        color: white;
    }

    .post
    {
        background-color: transparent;
        color: white;
        margin: 0px;
        padding: 0px;
        list-style-type: none;    border-width: 0px;
    }

    .info
    {
        background-color: transparent;
        color: white;
        margin: 0px;
        padding: 0px;
        list-style-type: none;    border-width: 0px;
    }

    .note
    {
        background-color: transparent;
        color: white;
        margin: 0px;
        padding: 0px;
        list-style-type: none;    border-width: 0px;
    }

    .footer
    {
        background-color: #555;
        color: white;
        width: 100%;
        position: fixed;
        float:bottom;
    }

</style>

<div class="navbar navbar-fixed-top" style="background-color: #101010;">
    <div class="container-fluid">
        <div>
            <a href="homepage.php"><p class="navbar-brand">connect in.</p></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li id="newnote"><a href="new-note.php"><button type="button" class="note"><span class="glyphicon glyphicon-folder-open"></span></button></a></li>
            <li id="newinfo"><a href="new-info.php"><button type="button" class="info"><span class="glyphicon glyphicon-volume-up"></span></button></a></li>
            <li id="newpost"><a href="new-post.php"><button type="button" class="post"><span class="glyphicon glyphicon-pencil"></span></button></a></li>
            <li id="profile"><a href="profile.php">Profile</a></li>
            <li id="setting"><a href="changep.php">Settings</a></li>
            <li id="logout"><a href="javascript:Logout()" >Logout</a></li>
        </ul>
        <form>
            <div class="searchbar input-group col-md-4">
                <input type="text" class="form-control" placeholder="Search your query here..." id="search">
                <div class="input-group-btn">
                    <button class="btn" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function Logout() {
        var txt;
        if (confirm("Are you sure you want to logout?") == true)
        {
            window.location = "logout.php";
        } else
        {
            location.reload();
        }

        // document.getElementById("demo").style.visibility="hidden";
    }
</script>
