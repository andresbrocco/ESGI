FROM debian:stretch

# Exécute les commandes spécifiées en argument
# Ici, installe vim
RUN apt update \
    && apt install -y vim

# Définir une variable passée par l'utilisateur de votre image
# Au moment du build de celle-ci
# ARG myvariable=myvalue
ARG fichier_executable

# Définit une variable d'environnement
ENV MYEXEC=${fichier_executable}

# Copie le fichier "hello" depuis le répertoire où se situe notre Dockerfile
# Vers la racine du filesystem de notre conteneur
COPY ${fichier_executable}.sh /

# Indique à Docker que le conteneur créé va écouter sur le port
# indiqué en argument lors de l'exécution de celui-ci
# Ici, notre conteneur va écouter sur le port 80
EXPOSE 80

# Définit le fichier à exécuter au démarrage du conteneur
ENTRYPOINT ["/hello.sh"]

# Définit la commande à lancer lors du démarrage du conteneur
# Ici : `/hello -a --quiet no`
CMD ["Katia"]
