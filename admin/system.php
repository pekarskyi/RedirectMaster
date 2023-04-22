<?php
define('ROOT', dirname(__DIR__));
include 'configProject.php';
include 'views/header' . $phpExt;
include 'sidebar' . $phpExt;

$current_version = '1.5';
$current_lang = 'русский';
$current_release_date = '22-04-2023';
$check_version = 'https://inwebpress.com/versions/';

$stream_context = stream_context_create([
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false
        ]
    ]);  
    
    $latest_version = file_get_contents("$check_version/redirect_version.txt", false, $stream_context); 
?>

<!---About System--->
<h4>О системе</h4>

<p class="text-secondary">
    <?php if ($current_version < $latest_version) {
    echo "Текущая версия: $current_version <span class='new_version_number'>Доступно $latest_version</span>";
    } else {
        echo "Текущая версия: $current_version";
    }
    ?>
    <br>
    Язык: <?php echo $current_lang; ?><br>
</p>
<p class="text-secondary-support">
    Поддержка и обновление: <a href="https://github.com/pekarskyi/RedirectMaster" target="_blank">Mykola Pekarskyi</a>
</p>

<!---Check System--->
<?php
    $error = false;
    if (phpversion() < "7.4") {
        $error = true;
        $requirement1 = "<span class='label label-warning'>" . phpversion() . "</span>";
    } else {
        $requirement1 = "<span class='label label-success'>" . phpversion() . "</span>";
    }

    if (!extension_loaded('mysqli')) {
        $error = true;
        $requirement2 = "<span class='label label-warning'>OFF</span>";
    } else {
        $requirement2 = "<span class='label label-success'>ON</span>";
    }

    if (!extension_loaded('openssl')) {
        $error = true;
        $requirement5 = "<span class='label label-warning'>OFF</span>";
    } else {
        $requirement5 = "<span class='label label-success'>ON</span>";
    }

?>
    <div id="wrapper_server">
        <div id="loader">
            <span class="dot dot_1"></span>
            <span class="dot dot_2"></span>
            <span class="dot dot_3"></span>
            <span class="dot dot_4"></span>
        </div>
        <table class="table_server table-hover" id="requirements" style="display:none;">
            <thead>
                <tr>
                    <th>Требования</th>
                    <th>Результат</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PHP 7.4+ </td>
                    <td><?php echo $requirement1; ?></td>
                </tr>
                <tr>
                    <td>Расширение MySQLi PHP</td>
                    <td><?php echo $requirement2; ?></td>
                </tr>
                <tr>
                    <td>Расширение OpenSSL PHP</td>
                    <td><?php echo $requirement5; ?></td>
                </tr>
            </tbody>
            
        </table>
    </div>
    <script>
        var loading = {
            complete: function () {
                var loading = document.getElementById("loader");
                loading.remove(loading);
            }
        };
        document.addEventListener("readystatechange", function () {
            if (document.readyState === "complete") {
                setTimeout(function(){
                    loading.complete();
                    var requirements = document.getElementById("requirements");
                    requirements.style['display'] = null;
                },3000);
            }
        });
    </script>

<!---Changelog--->
<p class="text-secondary">
    <b>Список изменений:</b></p>

<p class="text-secondary-changelog">
    <?php 
        echo $current_version;
        echo "&nbsp;";
        echo "($current_release_date)"; 
    ?>
    <ul class="text-secondary-changelog">
        <li>Мелкие улучшения в дизайне (шрифт, иконки, кнопки)</li>
        <li>Поддержка PHP 7.4 - 8.1</li>
        <li>Исправление ошибок PHP</li>
        <li>Создание версии скрипта на украинском языке</li>
        <li>Проверка наличия новой версии (О системе)</li>
	    <li>Проверка версии PHP и расширений (О системе)</li>
    </ul>

</p>

<?php include 'views/footer' . $phpExt; ?>