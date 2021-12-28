<?php
/*
 * このドキュメントは以下のルール設定ジェネレータで生成された。
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:3.1.0|configurator
 * 上記でエクスポートしたファイルを使用すれば、この構成を変更できる。
 */
$config = new PhpCsFixer\Config();
return $config
		->setRiskyAllowed(true)
	->setRules([
		'@PSR2' => true, // 整形基準となるPSRバージョン@PSR12の継承元
		'array_indentation' => true, // 配列左のインデントを空ける
		'array_syntax' => ['syntax' => 'short'], // 配列のリテラル構文
		'combine_consecutive_unsets' => true, // unsetで複数要素指定は1つのみ実行
		'class_attributes_separation' => ['elements' => ['method' => 'one', ]], // クラス/トレイト/インターフェースは1行or空白行なしで区切る
		'multiline_whitespace_before_semicolons' => false, // セミコロンの前の複数行の空白無し、メソッドチェーンの場合は最終行にセミコロンのみ
		'single_quote' => true, // 単純な文字列はシングルクォートを使用
		'binary_operator_spaces' => [ // 二項演算子の前後は空白を空ける
			'operators' => [
				// '=>' => 'align', // 複数の=>の左端を揃える
				// '=' => 'align' // 複数の=の左端を揃える
			]
		],
		// 'blank_line_after_opening_tag' => true, // <?phpの開始タグの後に空白行
		// 'blank_line_before_statement' => true, // 構文の前には空行を空ける
		'braces' => [
			'allow_single_line_closure' => true, // 単一行のは波括弧閉で閉じる
		],
		'cast_spaces' => true, // キャストと変数(int) $numの間に空白を空ける
		// 'class_definition' => array('singleLine' => true), // クラス/トレイト/インターフェースの定義名を空白は1スペース
		'concat_space' => ['spacing' => 'one'], // 文字列結合のドット前後の空白を1スペース空ける
		'declare_equal_normalize' => true, // declare関数内の=前後の空白を空ける
		'declare_strict_types' => true, // 外部ファイルでも定義された関数の型指定を厳格に判定
		'function_typehint_space' => true, // 引数と型の間は1スペース空き
		'full_opening_tag' => true, // phpの開始タグに<?のみであればphpを付与
		'single_line_comment_style' => ['comment_types' => ['asterisk']], // 1行コードに対する/*コメントは//に変更
		'include' => true, // requireやincluedの後は1スペース空き
		'lowercase_cast' => true, // キャスト内の型名は小文字(int)に変換
		// 'native_function_casing' => true, // 関数名の大文字参照は小文字に変換
		'new_with_braces' => true, // newの後のクラス名に()を付ける
		'no_blank_lines_after_class_opening' => true, // クラス定義の{の直後の空行を削除
		'no_blank_lines_after_phpdoc' => true, // 関数メソッドとPHPDocの間に余白は空けない
		'no_blank_lines_before_namespace' => true, // 名前空間の手前の空白行を削除
		'no_empty_comment' => true, // 空のコメントを削除
		'no_empty_phpdoc' => true, // 空のPHPDocを削除
		// 'no_empty_statement' => true, // 未使用の;セミコロンを削除
		'no_extra_blank_lines' => [ // 余分な空白行や空白行を削除
			'tokens' => [
				'curly_brace_block', // 波括弧
				'extra', // 余分な空行
				// 'parenthesis_brace_block', // 親の空行
				// 'square_brace_block', // 配列の括弧
				'throw', // 例外の括弧
				'use', // トレイト
			]
		],
		// 'no_leading_import_slash' => true, // トレイトの行頭の/を削除
		// 'no_leading_namespace_whitespace' => true, // 名前空間の空白を削除
		// 'no_mixed_echo_print' => array('use' => 'echo'), // printをechoに置換
		'no_multiline_whitespace_around_double_arrow' => true, // =>演算子前後の空行を削除
		// 'no_short_bool_cast' => true, // !!の型変換は(bool)に変換
		'no_singleline_whitespace_before_semicolons' => true, // ;前の空白を削除
		'no_spaces_around_offset' => true, // []の外側の余白を削除
		'no_trailing_comma_in_list_call' => true, // 引数のケツカンマは削除
		'no_trailing_comma_in_singleline_array' => true, // 配列のケツカンマは削除
		'no_unneeded_control_parentheses' => true, // echo()などの余計な丸括弧を削除
		// 'no_unused_imports' => true, // 未使用のトレイトを削除
		'no_whitespace_before_comma_in_array' => true, // 配列カンマの前の空行を削除
		'no_whitespace_in_blank_line' => true, // 空行の空白を削除
		// 'normalize_index_brace' => true, // 配列のインデックス指定の{}を[]に変換
		'object_operator_without_whitespace' => true, // ->オブジェクト演算子の前後の空白を削除
		// 'php_unit_fqcn_annotation' => true, // PHPUnitのアノテーションにルートの/を付与
		'phpdoc_align' => true, // PHPDocの変数の左端を揃える
		// 'phpdoc_annotation_without_dot' => true, // PHPDocの@paramの解説は大文字で始める
		// 'phpdoc_indent' => true, // PHPDocのインデントを空けて揃える
		// 'phpdoc_inline_tag' => true, // PHPDocの{@phpdoc}の記述変更
		// 'phpdoc_no_access' => true, // PHPDocの修飾子の説明などの省略
		// 'phpdoc_no_alias_tag' => true, // PHPDocの@property-readを使用しない
		// 'phpdoc_no_empty_return' => true, // PHPDoc内のnullやvoidは削除
		// 'phpdoc_no_package' => true, // PHPDocの@packageを削除
		// 'phpdoc_no_useless_inheritdoc' => true, // PHPDocの継承しない@inheritdocを削除
		// 'phpdoc_return_self_reference' => true, // PHPDocの参照を返す@return thisはselfに置換
		// 'phpdoc_scalar' => true, // PHPDocのスカラー型を変更integer→int
		'phpdoc_separation' => true, // PHPDocの同じ指定はグループ化、異なる指定は1行空き
		'phpdoc_single_line_var_spacing' => true, // PHPDocの無駄なスペースは1マス空きに置換
		// 'phpdoc_summary' => true, // PHPDocの解説の末行は全て.で終わる
		// 'phpdoc_to_comment' => true, // PHPDocを構造要素のみで指定
		// 'phpdoc_trim' => true, // PHPDocの空行を削除
		// 'phpdoc_types' => true, // PHPDocの型指定は全て小文字に置換
		// 'phpdoc_var_without_name' => true, // 型指定の後の変数名は削除
		// 'increment_style' => true, // 加算子の記号を後ろに置換
		// 'return_type_declaration' => true, // 戻り値の型の:の後に1スペース空ける
		// 'self_accessor' => true, // クラス内でインターフェースを呼び出した場合のクラス名をselfに置換
		// 'short_scalar_cast' => true, // キャスト(integer)を(int)のように短く置換
		// 'single_blank_line_before_namespace' => true, // 名前空間の前に1スペース空ける
		// 'single_class_element_per_statement' => true, // クラス内の定数の,での複数指定を別行に分散
		'space_after_semicolon' => true, // forなどのセミコロンの後を1スペース空ける
		// 'standardize_not_equals' => true, // !=を<>に置換
		'ternary_operator_spaces' => true, // 三項演算子の各記号前後の空白を1スペースに調整
		// 'trailing_comma_in_multiline' => ['elements' => ['arrays']], // 配列のケツカンマを付与
		'trim_array_spaces' => true, // 配列の最初と最後の空白を削除
		'unary_operator_spaces' => true, // 加算子などの単項演算子に空白があれば削除
		'whitespace_after_comma_in_array' => true, // 配列のカンマの後を1スペース空ける
		'single_blank_line_at_eof' => false // phpの終了タグが無い場合は文末に空行を追加
	])
	->setFinder(
		PhpCsFixer\Finder::create()
		->exclude([ // 除外ファイル
			'vendor'
		])
		->in(__DIR__)
	)
	->setIndent("\t")
;