<ul>
    <li>
        <p>sample1</p>
    </li>
        <?php
                $lebel1 = "D" ;

                switch ($lebel1) {
                    case "A":
                        print("素晴らしい");
                        break;

                    case "B":
                        print("いいね");
                        break;

                    case "C":
                        print("悪くはないけど");
                        break;

                    default:
                        print("がんばって");
                        break;
                }
        ?>
    <br>
    <li>
        <p>課題</p>
    </li>
        <?php
                $lebel1 = "赤" ;

                switch ($lebel1) {
                    case "赤":
                        print("あなたの好きな色は赤！");
                        break;

                    case "緑":
                        print("あなたの好きな色は緑！");
                        break;

                    case "青":
                        print("あなたの好きな色は青！");
                        break;

                    default:
                        print("ないよ");
                        break;
                    }
        ?>

</ul>
