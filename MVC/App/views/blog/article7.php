<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php   
        $maincss = realpath('../../../Public/css/blogcss/article.css');
        if($maincss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/blogcss/article.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/blogcss/article.css\">";
        }
        
        $menucss = realpath('../../../Public/css/globals/header2.css');
        if($menucss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
        }
    ?>
    <title>Blog</title>
</head>
<body>
    <?php
        $temp = realpath('resources/header3.php');
        if($temp != false) {
            include realpath('resources/header3.php');
        }
        else {        
            include realpath('../../../Public/resources/header3.php');
        }
    ?>    

    <div class="article">
        <div class="title">
            Lorem ipsum
        </div>
        <div class="author">
            by Jinga Andreea
        </div>
        <div class="articleBody">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio dignissimos placeat ullam exercitationem modi repudiandae accusamus obcaecati alias porro deserunt, facere incidunt assumenda magni. Reprehenderit sed repellat provident ea vel!
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>