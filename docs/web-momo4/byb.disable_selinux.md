## 6.5. Disable SELinux

Red Hat uses the Security-Enhanced Linux (SELinux) security policies. Running Momentum 4 with SELinux enabled is not supported. To disable SELinux, edit `/etc/selinux/config` and set `SELINUX=disabled` then run **`setenforce 0`**   .
