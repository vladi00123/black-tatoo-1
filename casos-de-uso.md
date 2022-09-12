
# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): O usuário deverá se cadastrar utilizando o e-mail
 - [CDU 02](#CDU-02): O usuário deve inserir a senha  
 - [CDU 03](#CDU-03): O usuário poderá visualizar o catálogo sem fazer cadastro 
 - [CDU 04](#CDU-04): O usuário poderá fazer agendamento se for maior de idade 
 - [CDU 05](#CDU-05): O usuário poderá marcar horário após o agendamento
 - [CDU 06](#CDU-06): O usuário poderá entrar em contato após se cadastrar
 - [CDU 07](#CDU-07): 

## Lista dos Atores

 - Cliente 
 - Administrador
 - Profissional 


## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

### CDU 01 Cadastro

Cadastro de usuário

**Fluxo Principal**

1. O usuário deverá inserir nome, email e senha nos campos visíveis do sistema. 
2. O usuário aperta no botão de "Cadastrar".
3. O sistema irá armazenar os dados e informará que o usuário foi criado com sucesso. 
4. O sistema volta para a tela inicial para criar novo usuário.

**Fluxo Alternativo A**

O usuário poderá se cadastrar utilizando o número de celular.


**Fluxo Alternativo B**

O usuário poderá se cadastrar utilizando nome de usuário.

### CDU 02

Morbi fringilla dolor at mattis vestibulum.

**Fluxo Principal**

1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
2. Mauris varius massa ac fermentum scelerisque.
3. Morbi in tortor dignissim, bibendum tellus et, varius odio.
4. Mauris egestas leo a suscipit feugiat.

**Fluxo Alternativo A**

1. Nulla elementum diam eu elementum rutrum.
2. Aenean scelerisque est at nunc ornare, ac condimentum justo sollicitudin.
3. Quisque eget risus ut est lacinia sollicitudin ac non diam.
4. Quisque ac nulla convallis, lobortis nibh ac, tristique enim.
5. Nulla ultricies metus nec risus mollis, interdum ultrices justo malesuada.

### CDU 03 Visualização 

Visualização de catálogo.

**Fluxo Principal**

1. O usuário insere email e senha nos campos visíveis.
2. O usuário clica em "Enviar".
3. O sistema mostra um texto de "Bem Vindo" e redireciona o usuário para a tela inicial do site.
4. O usuário clica na aba do "Catálogo".
5. O usuário terá acesso ao catálogo de tatuagens.

**Fluxo Alternativo A**

O usuário poderá visualizar o catálogo estando logado.

**Fluxo Alternativo B**

O usuário poderá ver o catálogo em qualquer circunstância.

### CDU 04 Agendamento

Agendamento de tatuagem.

**Fluxo Principal**

1. O usuário já logado no sistema clica em "Agendamento".
2. O usuário é redirecionado para uma página onde deve inserir sua data de nascimento.
3. O usuário clica em "Enviar". 
4. O sistema redireciona o usuário para uma dela de calendário.
5. O usuário escolhe uma data.
6. O usuário clica em "Enviar". 
7. O sistema exibe a mensagem "Agendamento feito com sucesso".

**Fluxo Alternativo A**

Caso o usuário insira sua data de nascimento e não apresente a documentação necessária, não poderá fazer agendamento.

**Fluxo Alternativo B**

O usuário menor de idade poderá fazer agendamento caso seu responsável entre em contato com o estúdio de tatuagem.
O responsável do menor de idade deverá apresentar comprovante de que é realmente o responsável por aquela pessoa.

## CDU 05 Agendamento de horário.

Agendamento de sessão de tatuagem.

**Fluxo Principal**



