# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Cadastrar cliente;
 - [CDU 02](#CDU-02): Marcar agendamento;
 - [CDU 03](#CDU-03): Listar clientes cadastrados;
 - [CDU 04](#CDU-04): Visualizar agendamento;
 - [CDU 05](#CDU-05): Cancelar agendamento;
 - [CDU 05](#CDU-06): Listar clientes.
 - [CDU 05](#CDU-07): Excluir cliente.

 
## Lista dos Atores

 - Cliente;
 - Profissional; 
 - Administrador;

## Diagrama de Casos de Uso

[Diagrama de Casos de Uso] ![image](https://user-images.githubusercontent.com/111150590/193352896-cd5d25e6-1303-4cf3-b7c4-5523768fc09f.png)



## Descrição dos Casos de Uso

### CDU 01 Cadastrar cliente

**Fluxo Principal**

1. O sistema possuirá uma tela de cadastro com um formulário.
2. O cliente irá inserir os dados no formulário (nome, e-mail e senha).
3. O cliente irá enviar os dados para o sistema clicando no botão "Enviar".
4. O cliente será redirecionado para outra página com o aviso "Cadastro efetuado!". 

**Fluxo Alternativo**

1. O sistema possuirá uma tela de cadastro com um formulário.
2. O cliente irá inserir os dados no formulário (nome, e-mail e senha).
4. O cliente irá enviar os dados para o sistema clicando no botão "Enviar".
5. O sistema informará ao cliente que o email e senha estão inválidos.
6. O cliente digitará corretamente email e senha.
7. O cliente clica em "Enviar".
8. O cliente será redirecionado para outra página com o aviso "Cadastro efetuado!".

 ### CDU 02 Marcar agendamento  

 **Fluxo Principal**

1. O sistema exibirá os horários e os profissionais disponíveis.
2. O cliente irá escolher o horário e profissional de sua preferência. 
3. O cliente irá cilcar em "Agendar".
4. O cliente será redirecionado para outra página com o aviso "Agendamento efetuado!". 

**Fluxo Alternativo**

1. O sistema exibirá os horários e os profissionais.
2. O cliente irá escolher o horário e profissional de sua preferência. 
3. O cliente irá clicar em "Agendar".
4. O sistema informará que o profissional não está disponivel.
5. O cliente escolherá outro profissional.
6. O cliente irá clicar em "Agendar".
7. O cliente será redirecionado para outra página com o aviso "Agendamento efetuado!". 

### CDU 03 Listar clientes cadastrados

**Fluxo Principal**

1. O administrador possuirá uma interface própria.
2. Nessa interface possuirá um botão "clientes".
3. O administrador clica nesse botão e será redirecionado para outra página.
4. Essa página possuirá todos clientes cadastrados.
5. O administrador poderá excluir cadastros.

**Fluxo Alternativo**

1. O administrador clica no botão "clientes".
2. O administrador seleciona um cliente.
3. O administrador tentará excluir o cadastro.
4. Será exibido a mensagem de que o cadastro foi cancelado.

### CDU 04 Visualizar agendamento

**Fluxo Principal**

1. O administrador e o funcionário poderão ver os agendamentos feitos pelos clientes.
2. Na interface do administrador terá um botão "agendamentos" ao clicar ele será redirecionado para outra página.
3. Essa página terá registros de todos os agendamentos feitos pelo sistema.
4. Na interface do profissional terá um botão "meus agendamentos" ao clicar ele será redirecionado para outra página.
5. Essa página terá as datas e os hórarios que o profissinal terá que atender.

### CDU 05 Cancelar agendamento

**Fluxo Principal**
1. Na interface do administrador terá a página "agendamentos" .
2. Dentro da página "agendamentos" cada agendamento que ainda não teve seu serviço prestado terá o botão "cancelar". 
3. O administrador clicará no botão "cancelar" e uma mensagem "Gostaria de cancelar esse agendamendo?" será exibida.
4. O administrador clicará em "sim" e a mensagem "cancelamento feito com sucesso!!"

### CDU 06 Listar cliente

**Fluxo principal**

1. 



### CDU 07 Excluir cliente 

**Fluxo principal**

1.
