FROM nginx

EXPOSE 8080

LABEL io.k8s.description="A basic Apache HTTP Server child image, uses ONBUILD" \
      io.k8s.display-name="Apache HTTP Server" \
      io.openshift.expose-services="8080:http" \
      io.openshift.tags="apache, httpd"

RUN sed -i "s/listen       80/listen       8080/g" /etc/nginx/conf.d/default.conf

RUN chgrp -R 0 /etc/nginx /var/cache/nginx /var/run/ && \
    chmod -R g=u /etc/nginx /var/cache/nginx /var/run/

USER 1001
