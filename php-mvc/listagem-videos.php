<?php
    session_start();

    $dbPath = __DIR__ . '/db.sqlite';
    $pdo = new PDO('sqlite:' . $dbPath);
    $videoList = $pdo->query('SELECT * FROM videos')->fetchAll(PDO::FETCH_ASSOC);
?>

<?php require_once 'inicio-html.php'; ?>

    <ul class="videos__container" alt="videos alura">
        <?php if(isset($_SESSION['status'])): ?>
            <div style="background-color: green">
                <?php echo $_SESSION['status']; ?>
            </div>
            <?php
                unset($_SESSION['status']);   
        endif ?>
        <?php foreach ($videoList as $video): ?>
            <?php if(str_starts_with($video['url'], 'http')): ?>
                <li class="videos__item">
                    <iframe width="100%" height="72%" src="<?= $video['url']; ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="descricao-video">
                        <img src="./img/logo.png" alt="logo canal alura">
                        <h3><?= $video['title']; ?></h3>
                        <div class="acoes-video">
                            <a href="./editar-video?id=<?= $video['id']; ?>">Editar</a>
                            <a href="./remover-video?id=<?= $video['id']; ?>">Excluir</a>
                        </div>
                    </div>
                </li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
<?php require_once 'fim-html.php';?>