+<?php
+
+function arrayRand($data) {
+    $randomIndex = mt_rand(0, count($data) - 1);
+
+    // retourne un élément aléatoire d'un tableau
+    return $data[$randomIndex];
+}
+
+$adjectives = [
+    'mignon',
+    'gentil',
+    'adorable',
+    'kawaï',
+    'drôle',
+    'épatant',
+];
+
+$animals = [
+    'koala',
+    'petit chat',
+    'poisson rouge',
+    'blobfish',
+    'chiot',
+    'tigron',
+    'bébé pinguin',
+];
+
+$emojis = [
+    '😂',
+    '🏩',
+    '❤️',
+    '😘',
+    '😊',
+    '🤗',
+];
+
+$adjectives1 = arrayRand($adjectives);
+$adjectives2 = arrayRand($adjectives);
+$animal = arrayRand($animals);
+$emoji = arrayRand($emojis);
+
+print sprintf(
+    "Tu es %s comme un %s %s ! %s\n",
+    $adjectives1,
+    $adjectives2,
+    $animal,
+    $emoji
+);
