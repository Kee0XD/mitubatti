<?php
$target_dir = "uploads/"; // アップロードされたファイルを保存するディレクトリ
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // アップロードされたファイルのパス

// ファイルを移動
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "ファイルがアップロードされました。";
} else {
    echo "ファイルのアップロード中にエラーが発生しました。";
}

// ファイルへのアクセス用のURLを生成
$file_url = "http://example.com/uploads/" . basename($_FILES["fileToUpload"]["name"]);
echo "ファイルのURL: " . $file_url;
?>
