{"filter":false,"title":"index.php","tooltip":"/index.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":16,"column":2},"action":"insert","lines":["<?php","$conn = mysqli_connect(\"localhost\", \"root\", \"111111\", \"opentutorials\");","$sql  = \"","    INSER INTO topic (","        title,","        description,","        created","    ) VALUES (","        'MySQL',","        'MySQL is ....',","        NOW()","    )\";","$result = mysqli_query($conn, $sql);","if($result === false){","    echo mysqli_error($conn);","}","?>"],"id":1}],[{"start":{"row":1,"column":40},"end":{"row":1,"column":41},"action":"remove","lines":["t"],"id":2},{"start":{"row":1,"column":39},"end":{"row":1,"column":40},"action":"remove","lines":["o"]},{"start":{"row":1,"column":38},"end":{"row":1,"column":39},"action":"remove","lines":["o"]},{"start":{"row":1,"column":37},"end":{"row":1,"column":38},"action":"remove","lines":["r"]}],[{"start":{"row":1,"column":37},"end":{"row":1,"column":38},"action":"insert","lines":["c"],"id":3},{"start":{"row":1,"column":38},"end":{"row":1,"column":39},"action":"insert","lines":["h"]},{"start":{"row":1,"column":39},"end":{"row":1,"column":40},"action":"insert","lines":["o"]},{"start":{"row":1,"column":40},"end":{"row":1,"column":41},"action":"insert","lines":["i"]}],[{"start":{"row":1,"column":50},"end":{"row":1,"column":51},"action":"remove","lines":["1"],"id":4},{"start":{"row":1,"column":49},"end":{"row":1,"column":50},"action":"remove","lines":["1"]},{"start":{"row":1,"column":48},"end":{"row":1,"column":49},"action":"remove","lines":["1"]},{"start":{"row":1,"column":47},"end":{"row":1,"column":48},"action":"remove","lines":["1"]},{"start":{"row":1,"column":46},"end":{"row":1,"column":47},"action":"remove","lines":["1"]},{"start":{"row":1,"column":45},"end":{"row":1,"column":46},"action":"remove","lines":["1"]}],[{"start":{"row":1,"column":45},"end":{"row":1,"column":46},"action":"insert","lines":["1"],"id":5},{"start":{"row":1,"column":46},"end":{"row":1,"column":47},"action":"insert","lines":["2"]},{"start":{"row":1,"column":47},"end":{"row":1,"column":48},"action":"insert","lines":["3"]},{"start":{"row":1,"column":48},"end":{"row":1,"column":49},"action":"insert","lines":["4"]}],[{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"insert","lines":["T"],"id":6}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":10},"end":{"row":3,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1569052257066,"hash":"6eba41c490694eb5aa45e60932df434cbc2dd882"}