<?php

// Language definitions used in profile.php
$lang_profile = array(

// Navigation and sections
'Profile menu'					=>	'プロフィール',
'Section essentials'			=>	'基本設定',
'Section personal'				=>	'個人情報',
'Section messaging'				=>	'メッセンジャー',
'Section personality'			=>	'パーソナリティ',
'Section display'				=>	'表示設定',
'Section privacy'				=>	'プライバシー',
'Section admin'					=>	'管理設定',

// Miscellaneous
'Username and pass legend'		=>	'ユーザー名とパスワード',
'Personal details legend'		=>	'個人情報の設定',
'Contact details legend'		=>	'メッセンジャーの設定',
'User activity'					=>	'活動状況',
'Paginate info'					=>	'各ページに表示するトピック数と投稿数を入力して下さい。',

// Password stuff
'Pass key bad'					=>	'指定されたアクティベーションキーは、正しくないか期限が切れています。再度新しいパスワードをリクエストしてください。失敗するようなら管理者に連絡してください。',
'Pass updated'					=>	'パスワードが変更されました。新しいパスワードでログインできます。',
'Pass updated redirect'			=>	'パスワードが変更されました。リダイレクト中 …',
'Wrong pass'					=>	'古いパスワードが間違っています。',
'Change pass'					=>	'パスワードの変更',
'Change pass legend'			=>	'新しいパスワードの設定',
'Old pass'						=>	'古いパスワードを入力',
'New pass'						=>	'新しいパスワード',
'Confirm new pass'				=>	'新しいパスワード（確認）',
'Pass info'						=>	'パスワードは大文字／小文字を意識して４文字（半角）以上入力してください。',

// Email stuff
'Email key bad'					=>	'指定されたアクティベーションキーは、正しくないか期限が切れています。再度メールアドレスの変更をリクエストしてください。失敗するようなら管理者に連絡してください。',
'Email updated'					=>	'メールアドレスが変更されました。',
'Activate email sent'			=>	'新しいメールアドレスにアクティベーションメールを送信しました。メールが届かない場合は管理者に連絡してください。',
'Email legend'					=>	'新しいメールアドレスを入力',
'Email instructions'			=>	'アクティベーションリンクが書かれたメールが送信されます。メールに書かれたリンクをクリックして新しいメールアドレスを有効にしてください。',
'Change email'					=>	'メールアドレスの変更',
'New email'						=>	'新しいメールアドレス',

// Avatar upload stuff
'Avatars disabled'				=>	'アバターは使えません。',
'Too large ini'					=>	'ファイルが大きすぎます。アップロードできません。',
'Partial upload'				=>	'アップロードに失敗しました。再度アップロードしてください。',
'No tmp directory'				=>	'ファイルをテンポラリーディレクトリに保存できませんでした。',
'No file'						=>	'ファイルが見当たりません。',
'Bad type'						=>	'このファイルはアップロードできません。gif, jpeg, png ファイルを指定してください。',
'Too wide or high'				=>	'幅または高さが大きすぎます。最大値：',
'Too large'						=>	'ファイルサイズが大きすぎます。最大値：',
'pixels'						=>	'ピクセル',
'bytes'							=>	'バイト',
'Move failed'					=>	'ファイルを保存できませんでした。管理者に連絡してください。',
'Unknown failure'				=>	'不明なエラーが発生しました。リトライしてください。',
'Avatar upload redirect'		=>	'アバターがアップロードされました。リダイレクト中 …',
'Avatar deleted redirect'		=>	'アバターが削除されました。リダイレクト中 …',
'Avatar desc'					=>	'アバターはあなたの投稿に表示される小さい画像です。最大サイズ： ',
'Upload avatar'					=>	'アバターをアップロード',
'Upload avatar legend'			=>	'アップロードするファイルを選択してください。',
'Delete avatar'					=>	'アバターを削除', // only for admins
'File'							=>	'ファイル',
'Upload'						=>	'アップロード', // submit button

// Form validation stuff
'Forbidden title'				=>	'あなたが入力したタイトルは禁止語を含んでいます。違うタイトルを入力してください。',
'Profile redirect'				=>	'プロフィールがアップデートされました。リダイレクト中 …',

// Profile display stuff
'Users profile'					=>	'%s\'s プロフィール',
'Username info'					=>	'ユーザー名: %s',
'Email info'					=>	'メール: %s',
'Posts info'					=>	'投稿: %s',
'Registered info'				=>	'登録日: %s',
'Last post info'				=>	'最後の投稿: %s',
'Show posts'					=>	'投稿を見る',
'Realname'						=>	'本名',
'Location'						=>	'住所',
'Website'						=>	'ウェブサイト',
'Jabber'						=>	'Jabber',
'ICQ'							=>	'ICQ',
'MSN'							=>	'MSN Messenger',
'AOL IM'						=>	'AOL IM',
'Yahoo'							=>	'Yahoo! Messenger',
'Avatar'						=>	'アバター',
'Signature'						=>	'署名',
'Sig max size'					=>	'最大文字数: %s 文字 / 最大行数: %s 行',
'Avatar legend'					=>	'アバターの設定',
'Avatar info'					=>	'アバターはあなたの投稿に表示される小さい画像です。下記のリンクでアバターをアップロードできます。',
'Change avatar'					=>	'アバターを変更',
'Signature legend'				=>	'署名の設定',
'Signature info'				=>	'署名は、投稿に付加される短いテキスト文です。好きな言葉（文章）を入力できます。お気に入りの引用句や星座名などを記入するのもよいでしょう。フォーラムで許可されていれば BBCode を使うこともできます。以下の書式に従っていつでも編集できます。',
'Sig preview'					=>	'署名のプレビュー:',
'No sig'						=>	'署名は設定されていません。',
'Signature quote/code/list/h'	=>	'署名には quote, code, list, heading の BBCode は使えません。',
'Topics per page'				=>	'トピック',
'Posts per page'				=>	'投稿',
'Leave blank'					=>	'空白にするとフォーラムの初期値が適用されます。',
'Subscription legend'			=>	'購読の設定',
'Notify full'					=>	'購読通知（メール）に新しい投稿の内容を含める',
'Auto notify full'				=>	'自分が投稿したトピックは自動的に購読する。',
'Show smilies'					=>	'スマイリーをアイコンで表示',
'Show images'					=>	'投稿に画像を表示',
'Show images sigs'				=>	'署名の画像を表示',
'Show avatars'					=>	'投稿にアバターを表示',
'Show sigs'						=>	'署名を表示',
'Style legend'					=>	'スタイルの設定',
'Styles'						=>	'好みのスタイルを選択してください。',
'Admin note'					=>	'管理者メモ',
'Pagination legend'				=>	'改ページの設定',
'Post display legend'			=>	'投稿の表示設定',
'Post display info'				=>	'低速回線では以下のオプション（特に投稿や署名の画像）を不可にすると表示が速くなります。',
'Instructions'					=>	'更新後このページに戻ります。',

// Administration stuff
'Group membership legend'		=>	'ユーザーグループの設定',
'Save'							=>	'保存',
'Set mods legend'				=>	'モデレーションフォーラムの設定',
'Moderator in info'				=>	'このユーザーが管理するフォーラムを選択してください。注意: 管理者は常にすべてのフォーラムの管理権限を持っています。',
'Update forums'					=>	'更新',
'Delete ban legend'				=>	'削除とアクセス制限（削除は管理者のみ操作可）',
'Delete user'					=>	'このユーザーを削除',
'Ban user'						=>	'このユーザーを制限',
'Confirm delete legend'			=>	'重要: ユーザーを削除する前に必ずお読みください。',
'Confirm delete user'			=>	'ユーザーの削除確認',
'Confirmation info'				=>	'右のユーザーを削除します。 － ', // the username will be appended to this string
'Delete warning'				=>	'警告! 削除操作は元に戻せません。「ユーザーの投稿とトピックも削除」を選択しなかった場合、後で手動で削除できます。',
'Delete posts'					=>	'ユーザーの投稿とトピックも削除',
'Delete'						=>	'削除', // submit button (confirm user delete)
'User delete redirect'			=>	'ユーザーを削除しました。リダイレクト中 …',
'Group membership redirect'		=>	'グループが設定されました。リダイレクト中 …',
'Update forums redirect'		=>	'モデレーションフォーラムを更新しました。リダイレクト中 …',
'Ban redirect'					=>	'リダイレクト中 …',
'No delete admin message'		=>	'管理者は削除できません。このユーザーを削除するには、先にグループを変更してください。',

);