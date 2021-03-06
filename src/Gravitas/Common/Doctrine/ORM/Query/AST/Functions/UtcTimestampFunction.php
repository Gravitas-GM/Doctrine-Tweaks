<?php
	namespace Gravitas\Common\Doctrine\ORM\Query\AST\Functions;

	use Doctrine\ORM\Query\AST\Functions\FunctionNode;
	use Doctrine\ORM\Query\Lexer;
	use Doctrine\ORM\Query\Parser;
	use Doctrine\ORM\Query\SqlWalker;

	class UtcTimestampFunction extends FunctionNode {
		public function getSql(SqlWalker $walker) {
			return 'UTC_TIMESTAMP()';
		}

		public function parse(Parser $parser) {
			$parser->match(Lexer::T_IDENTIFIER);
			$parser->match(Lexer::T_OPEN_PARENTHESIS);
			$parser->match(Lexer::T_CLOSE_PARENTHESIS);
		}
	}
?>