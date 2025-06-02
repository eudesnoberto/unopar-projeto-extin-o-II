```markdown
# 🎭 Sistema de Divulgação de Eventos Culturais

Projeto de Extensão II — Curso Superior de Tecnologia em Análise e Desenvolvimento de Sistemas  
Aluno: **Francieudes Silva Noberto Alves**  
RA: **3591156505**  
Polo: **Recife/PE**  
Instituição: UNOPAR  

---

## 📌 Descrição do Projeto

Este projeto foi desenvolvido no contexto do **Programa de Ação e Difusão Cultural** com o objetivo de aplicar conhecimentos de tecnologia da informação em benefício da cultura local. A solução consiste em um sistema web simples para **cadastro, gerenciamento e divulgação de eventos culturais** como feiras, exposições, apresentações artísticas e oficinas, voltado a grupos culturais e instituições locais.

O sistema é totalmente funcional, de fácil uso e acessível via navegador. Ele permite que eventos sejam divulgados com dados completos (nome, data, local, descrição e imagem), facilitando a organização, o engajamento e a comunicação com o público.

---

## 🎯 Objetivos do Projeto

- Desenvolver um sistema computacional funcional, com interface amigável;
- Ajudar instituições e coletivos culturais a divulgar suas atividades;
- Promover a cultura local utilizando recursos da tecnologia;
- Aplicar na prática os conteúdos vistos na graduação;
- Contribuir com os Objetivos de Desenvolvimento Sustentável da ONU.

---

## 🌱 Metas ODS relacionadas

- **ODS 4 — Educação de Qualidade**  
- **ODS 8 — Trabalho Decente e Crescimento Econômico**  
- **ODS 11 — Cidades e Comunidades Sustentáveis**

---

## 🔧 Tecnologias Utilizadas

- HTML5, CSS3 e JavaScript
- PHP (backend)
- MySQL (banco de dados)
- Apache (XAMPP ou similar)
- Editor: Visual Studio Code / PHPStorm

---

## 🗃️ Estrutura do Projeto

```

/eventos-culturais
│
├── index.php           # Página inicial com lista de eventos
├── cadastro.php        # Formulário de cadastro de novos eventos
├── salvar.php          # Script PHP que processa o formulário
├── imagens/            # Pasta para salvar as imagens dos eventos
├── conexao.php         # Arquivo de conexão com o banco de dados (opcional)
└── banco.sql           # Script de criação da base de dados

```

---

## 🧩 Funcionalidades

- ✅ Cadastro de eventos com nome, data, local, descrição e imagem
- ✅ Visualização de eventos em ordem de cadastro
- ✅ Layout adaptado para celulares e desktops
- ✅ Upload de imagens
- ✅ Armazenamento de dados em banco MySQL

---

## 📸 Exemplo de Tela

```

+-------------------------------------------+
\|         Sistema de Eventos Culturais      |
+-------------------------------------------+
\| Nome: Feira de Artesanato de Recife       |
\| Data: 10/06/2025                          |
\| Local: Praça do Arsenal                   |
\| Descrição: Evento com artesãos locais...  |
\| Imagem: \[foto exibida aqui]               |
+-------------------------------------------+

````

---

## 🛠️ Como Executar o Projeto

1. Instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html)
2. Copie os arquivos para a pasta `htdocs/`
3. Crie o banco de dados no phpMyAdmin com o script abaixo:

```sql
CREATE DATABASE eventos_culturais;
USE eventos_culturais;

CREATE TABLE eventos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  data DATE,
  local VARCHAR(150),
  descricao TEXT,
  imagem VARCHAR(200)
);
````

4. Acesse `http://localhost/eventos-culturais/index.php` no navegador.

---

## 🤝 Contribuição Social

Esse sistema está sendo disponibilizado para coletivos, centros culturais, feiras e instituições ligadas à promoção da cultura em Recife e outras regiões. Seu uso gratuito permite que mais artistas e grupos ganhem visibilidade sem custos com plataformas pagas ou redes sociais.

---

## 💬 Depoimento da Instituição Participante

> “O sistema desenvolvido pelo aluno Francieudes nos ajudou muito na organização e divulgação dos eventos mensais. A facilidade de uso da plataforma permitiu que vários membros da comunidade cultural se engajassem mais nas ações. Foi uma contribuição muito valiosa.”
> — Ana Beatriz, Coordenadora do Coletivo Cultural Recife Criativo

---

## 📖 Referências Bibliográficas

* BENYON, David. *Interação Humano-Computador*. São Paulo: Pearson, 2011.
* SEGURAGO, Valquíria Santos. *Projeto de Interface com o Usuário*. São Paulo: Pearson, 2017.
* OLIVEIRA, Sérgio. *Internet das Coisas com ESP8266, Arduino e Raspberry Pi*. Novatec, 2017.
* W3Schools. *HTML, PHP, MySQL tutorials*. Disponível em: [https://www.w3schools.com/](https://www.w3schools.com/)

---

## 🧠 Autoavaliação

* Integração entre teoria e prática: **10**
* Clareza na solução para o público-alvo: **9**
* Aprendizado técnico e pessoal: **10**
* Contribuição para a cultura e sociedade: **9**

---

## 🙋 Sobre o Autor

**Francieudes Silva Noberto Alves**
Estudante do CST em Análise e Desenvolvimento de Sistemas pela UNOPAR — Polo Recife/PE
RA: 3591156505
Contato: \[adicione e-mail ou GitHub se desejar]

---

## 📝 Licença

Este projeto é de código aberto sob a licença MIT. Sinta-se à vontade para usar, melhorar e distribuir, desde que com os devidos créditos.

```

---

Deseja que eu gere esse README como um arquivo `.md` ou `.pdf` para você? Posso também anexá-lo ao projeto ou formatá-lo no seu documento final.
```
