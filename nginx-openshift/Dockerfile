FROM registry.access.redhat.com/ubi8/ubi:8.0

EXPOSE 8080

ENV PYTHON_VERSION=3.6 \
    PATH=$HOME/.local/bin/:$PATH

LABEL io.k8s.display-name="Python 3.6" \
      io.openshift.expose-services="8080:http"


RUN yum -y update && \
    yum -y install python36 && \
    yum -y clean all --enablerepo='*'

USER 1001

CMD sleep 3600
