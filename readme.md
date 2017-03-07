docker-php-demo
---

Demo application to learn docker swarm. A simple PHP app running in an minimal apache container that will dump the timestamp and the hostname of the container.

Build the image locally:
```
docker build -t alpharecon19/docker-php-demo .
```

---

Create a new swarm:
```
docker swarm init --listen-addr {ip-address} --force-new-cluster --advertise-addr {ip-address}:2377
```

Get the other nodes to join the swarm (the same output as when you create the swam):
```
docker join --token {token} {ip-address}:2377
```

List the nodes in the swarm. Can only be run on the manager
```
docker node ls
```

Still on the manager host copy the contents of docker-compose.yml and run
```
docker stack deploy app -c docker-compose.yml
docker service ls
docker ps -a
```

There will be only one running instance. Now scale that to the rest of the swarm by replicating it across to 4 nodes.
```
docker service scale {serviceId}=4
```