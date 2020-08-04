### Tutorial de momo rodar a aplicação em sua máquina.

> Antes de tudo, tenha instalado em seu computador o Xampp (Windows) ou Lampp/Wampp (Linux). Este aplicativo fará com que exista um servidor local em sua máquina. Além disso, um editor de texto é bem-vindo. Eu uso o Sublime, mas existem outros como Visual Code e Atom. O editor de texto a ser usado é de sua preferência.

- Clone o repositório **dentro** da pasta `htdocs` da aplicação xampp. No meu dispositivo, tenho o seguinte diretório: `C:\xampp\htdocs`.

>É importante destacar que você pode clonar a aplicação de dois modos distintos. O primeiro modo é baixando o `.zip` no próprio site do GitHub e o extraindo à pasta `htdocs` já mencionada. O outro modo é via terminal. Nesse segundo modo, você terá que possuir o git instalado na máquina e seguir os seguintes passos (já no terminal):

```sh
$ cd xampp
$ cd htdocs
$ git clone https://github.com/dirproj/uniduniler.git
```

- O próximo passo é subir ao servidor local a nossa aplicação. Para isso, abra o `Xampp` e dê `start` em `Apache` e `MySQL`. Ambos os serviços só estarão aptos a funcionarem quando ao invés de aparecer `start` ter `stop`. Dessa forma, você já tem acesso local a aplicação.
> Para rodar a aplicação, vá no seu browser e digite http://localhost/uniduniler/uniduniler/ 

- Até agora, só temos acesso ao site e não a plataforma completa. Para tal, devemos seguir os seguintes passos:
1. Digite no seu navegador o seguinte endereço: http://localhost/phpmyadmin/ ;
2. Neste endereço, procure por `new` e na aba **Criar um novo banco de dados** digite `uniduniler`. Para a formatação do banco, selecione `utf8_general_ci`. Feito isso, crie o banco de dados;
3. Abra a pasta onde extraiu o projeto e procure por `uniduniler.sql`;
4. Abra o `SQL` na barra superior do PHPMyAdmin e copie o texto presente no arquivo do tópico acima. Cole no espaço que se abriu depois de realizado o passo 2, e `execute`. Assim, você terá o banco de dados da aplicação rodando na sua máquina. Se tudo estiver certo, dará pra ver as tabelas do site; 

> Para ter acesso a plataforma, digite a seguinte url: http://localhost/uniduniler/uniduniler/sistema/usuario/. Para logar, utilize o usuário `su@su.su` e senha `admin`

### Links para downloads

1. [Sublime Text](https://www.sublimetext.com/);
2. [GitHub](https://woliveiras.com.br/posts/instalando-o-git-windows/)
3. [Xampp](https://www.apachefriends.org/pt_br/download.html)







 



