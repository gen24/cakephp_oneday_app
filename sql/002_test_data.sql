# テストデータ

# テストユーザー
INSERT INTO `oneday_blog`.`users` (`name`,`created`,`modified`)
VALUES ('テストユーザ1',NOW(),NOW()),('テストユーザ2',NOW(),NOW());

# テストカテゴリ
INSERT INTO `oneday_blog`.`categories` (`name`,`created`,`modified`)
VALUES ('テストカテゴリー1',NOW(),NOW()),('テストカテゴリー2',NOW(),NOW());

# テストタグ
INSERT INTO `oneday_blog`.`tags` (`name`,`created`,`modified`)
VALUES ('テストタグ1',NOW(),NOW()),('テストタグ2',NOW(),NOW());

# テスト投稿
INSERT INTO `oneday_blog`.`posts` (`category_id`,`title`,`body`,`user_id`,`created`,`modified`)
VALUES 
(1,'テストタイトル1','記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文',1,NOW(),NOW() ),
(1,'テストタイトル2','記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文',2,NOW(),NOW() )
;

# テストコメント
INSERT INTO `oneday_blog`.`comments` (`post_id`,`body`,`user_id`,`created`,`modified`)
VALUES
(1,'コメント1',1,NOW(),NOW() ),
(1,'コメント2',1,NOW(),NOW() )
;

# テストタグ<=>投稿
INSERT INTO `oneday_blog`.`tag_posts` (`tag_id`,`post_id`,`created`,`modified`)
VALUES (1,1,NOW(),NOW()),(1,2,NOW(),NOW()),(2,2,NOW(),NOW());
