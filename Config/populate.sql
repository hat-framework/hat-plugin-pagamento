
INSERT IGNORE INTO `pagamento_produto` (`cod`, `dsnome`, `nrvalor`, `dsdescricao`, `lsperiodo`, `codperfil`) VALUES
(1, 'Análise Anual', '99.99', 'Assinantes ativos terão direito a visualização de dados completos dos balanços e o histórico completo dos indicadores.', 'yearly', 6);


INSERT IGNORE INTO  `pagamento_status` (`cod` ,`dsnome`)VALUES 
('1',    'Aguardando pagamento'),
('2',    'Em análise'), 
('3',    'Paga'), 
('4',    'Disponível'), 
('5',    'Em disputa'), 
('6',    'Devolvida'), 
('7',    'Cancelada'), 
('100',  'Clicado');
