# task-list
### Pré-requis : 
- Serveur PHP : lancer avec php -S localhost:8000

- Avoir docker installer sur la machine
  
- sudo apt install php php-mysql mysql-server


## Lancement de l'application :
### 1. Clôner le repository
```bash
"git clone <url-du-repo>"
cd tasklist-template
```

### 2- Construire l'image Docker
```bash
docker build -t task-list .
```

### 3- Lancer le container
```bash
docker run --name task-list -d -p 8080:80 task-list
```

## Port interne du container:
- 80


## 4- Accéder à l'application
Ouvrir le projet dans un naviguateur et aller sur : http://localhost:8080

# Arrêter le container 
docker stop task-list

# Supprimer le container
docker rm task-list
