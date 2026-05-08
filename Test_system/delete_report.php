<?php
// delete.php（論理削除の例）
require_once 'db.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    die('IDが不正です。<a href="allReports.php">戻る</a>');
}

try {
    $pdo->beginTransaction();
    
    // 物理削除ではなく、deleted_atに現在時刻を記録
    $stmt = $pdo->prepare('UPDATE safety_reports SET deleted_at = NOW() WHERE report_id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    
    $pdo->commit();
    header('Location: allReports.php');
    exit;
} catch (PDOException $e) {
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    echo '削除に失敗しました：' . htmlspecialchars($e->getMessage());
}
?>