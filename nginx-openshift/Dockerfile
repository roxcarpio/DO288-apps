FROM nginx

RUN chgrp -R 0 /etc/nginx /var/cache/nginx && \
    chmod -R g=u /etc/nginx /var/cache/nginx

USER 1001
