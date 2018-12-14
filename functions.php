<?php //子テーマ用関数

//親skins の取得有無の設定
function include_parent_skins(){
  return true; //親skinsを含める場合はtrue、含めない場合はfalse
}

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下にSimplicity子テーマ用の関数を書く
// エディタスタイルシート
add_editor_style( get_stylesheet_directory_uri() . '/editor-style.css?ver=' . date( 'U' ) );
add_editor_style( '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'child-font-awesome-css', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

function theme_enqueue_scripts() {
//	wp_enqueue_script( 'gotop-btn', get_stylesheet_directory_uri() .'/js/gotop-btn.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
