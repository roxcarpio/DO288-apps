FROM registry.access.redhat.com/ubi8/ubi:8.0

EXPOSE 8080

ENV PYTHON_VERSION=3.6 \
    PATH=$HOME/.local/bin/:$PATH 

LABEL io.k8s.display-name="Python 3.6" \
      io.openshift.expose-services="8080:http"


RUN INSTALL_PKGS="python36" && \
    yum -y module enable python36:3.6 && \
    yum -y --setopt=tsflags=nodocs install $INSTALL_PKGS && \
    rpm -V $INSTALL_PKGS && \
    yum -y clean all --enablerepo='*'

USER 1001

CMD sleep 3600
